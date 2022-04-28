<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Checkout;
use App\Models\Order;
use App\Models\Problem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function indexpage()
    {
        $product = Product::all()->take(4);
        $brand = Brand::all()->take(4);
        return view('user/index', ['product' => $product, 'brand' => $brand]);
    }
    public function allproducts()
    {
        $product = Product::all();
        return view('user/products', ['product' => $product]);
    }
    public function order(Request $request)
    {
        $input['product_id'] = $request['product_id'];
        $input['user_id'] =  auth()->user()->id;
        $input['order_quantity'] = $request['order_quantity'];
        $price = Product::where('id', '=', $request['product_id'])->value('product_price');
        $input['order_price'] = $price * $request['order_quantity'];
        $lastRecord = Checkout::orderBy('id', 'DESC')->first();
        $input['checkid'] = $lastRecord['id'] + 1;
        //dd($input);
        $pro = Order::create($input);
        session(['check' => $pro]);
        return redirect('/checkout2');
    }
    public function checkout(Request $request)
    {
        $x = 0;
        if ($request->session()->has('check')) {
            $lastRecord = Checkout::orderBy('id', 'DESC')->first();
            $checkout = Order::join('products', 'orders.product_id', '=', 'products.id')
                ->select('products.product_name', 'products.product_image', 'products.product_description', 'products.product_price', 'orders.order_quantity', 'orders.id')
                ->where('orders.user_id', '=', auth()->user()->id)
                ->where('orders.checkid', '=', $lastRecord['id'] + 1)
                ->get();
            foreach ($checkout as $or) {
                $x = $x + $or['product_price'] * $or['order_quantity'];
            }
            session(['check' => $checkout]);
            session(['x' => $x]);
            $d = $checkout->count();
            $i = auth()->user()->id;
            return view('user/cart1', ['d' => $d, 'i' => $i]);
        } else {
            return view('user/cart1', ['status' => 'no item added', 'd' => 0]);
        }
    }
    public function finalcheckout(Request $request)
    {
        $x = 0;
        $checkout = Order::join('products', 'orders.product_id', '=', 'products.id')
            ->select('products.product_name', 'products.product_image', 'products.product_description', 'products.product_price', 'orders.order_quantity', 'orders.id')
            ->where('orders.user_id', '=', auth()->user()->id)
            ->get();
        foreach ($checkout as $or) {
            $x = $x + $or['product_price'] * $or['order_quantity'];
        }
        $d = $checkout->count();

        return view('user/cart', ['check' => $checkout, 'x' => $x, 'd' => $d]);
    }
    public function totalcheckout(Request $request)
    {
        $input['total'] = $request['total'];
        $input['shipping'] = $request['shipping'];
        $input['total_price'] = $request['total_price'];

        $input['user_id'] = auth()->user()->id;
        $pro = Checkout::create($input);
        session()->forget(['check', 'x']);
        return redirect('/checkout2')->with('status', 'Order Added Successfully');
    }
    public function profile()
    {
        return view('user/profile');
    }
    public function problem()
    {
        $problem = Problem::all();
        return view('admin/problem', ['problem' => $problem]);
    }
    public function profileinfo()
    {
        $s = auth()->user()->name;
        $e = auth()->user()->email;
        $i = auth()->user()->id;
        $a = auth()->user()->address;
        $c = auth()->user()->city;
        $p = auth()->user()->phone;

        return view('user/profileinfo', ['s' => $s, 'e' => $e, 'i' => $i, 'a' => $a, 'c' => $c, 'p' => $p]);
    }
    public function support()
    {
        return view('user/support');
    }

    function orderss()
    {
        $checkout = Order::join('checkouts', 'orders.checkid', '=', 'checkouts.id')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->select('products.product_name', 'products.product_image', 'products.product_price', 'orders.order_quantity', 'orders.order_price', 'checkouts.total_price')
            ->where('checkouts.user_id', '=', auth()->user()->id)
            ->where('checkouts.id', '=', 23)
            ->get();

        return view('user/orderss', ['check' => $checkout]);
    }
}
