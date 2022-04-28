<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Date;

use function GuzzleHttp\json_encode;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin/allproduct', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $brand = Brand::all();

        return view('admin/addproduct', ['category' => $category, 'brand' => $brand]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|max:255',
            'product_description' => 'required|max:255',
            'product_image' => 'required|max:255',
            'product_code' => 'required|max:255',
            'product_quantity' => 'required',
            'product_price' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',

        ]);
        $path = 'public/img';
        $originalimage = $request['product_image']->getClientOriginalExtension();
        $file = time() . '.' . $originalimage;
        $request->product_image->move($path, $file);
        $input = $request->all();
        $input['product_image'] = $file;
        $input['product_date'] = Date::now();
        $pro = Product::create($input);
        return redirect('/prod');
        // dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view("admin/show", ["product" => $product]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $prod)
    {

        return view('admin/editproduct', ["prod" => $prod]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        //  dd($request->all());
        $product->update($request->all());
        //dd($product);
        return redirect("/prod");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect("/prod");
    }
}
