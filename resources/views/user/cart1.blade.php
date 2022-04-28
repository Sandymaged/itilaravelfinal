@extends('user.layout')
@section('contentuser')
<div class="container pt-5" style="margin-bottom: 350px">
    @if (session('status'))
    <div class="alert alert-success" style="margin-top:20px ">
        {{ session('status') }}
    </div>
    @endif
    @if ($d>0)
    @foreach(session('check') as $checkout)
    <div class=" row justify-content-md-center ml-5" >
    <div class="p-4">
    <div class="card bg-light" style="margin-right: 170px; height: 180px;">
      <div class="row">
    <div class="col-2">
      <img src="public/img/{{$checkout['product_image']}}" alt="" style="width: 170px;height:170px;padding:15px; border-radius:20px ">
  </div>
  <div class="col-6" style="padding-top: 50px;padding-left: 40px;">
    <span style="color: gray;font-size:x-large ;">{{$checkout['product_name']}}</span><br>
    <span>{{$checkout['product_description']}}</span>

  </div>
  <div class="col-2" style="margin-top:30px;margin-left:100px">
    <div>EGP <span style="font-weight: bold; font-size: large;"> {{$checkout['product_price']}}</span></div><br>
    <div class="select-control">
      <p style="border-radius: 5px; border: 1px solid black; background-color: white; width:50px" class="text-center">{{$checkout['order_quantity']}}</p>  </div>
   <form action="/order/{{$checkout['id']}}" method="POST">
    @method("delete")
    @csrf
    <input type="submit" value="Delete" class="btn btn-info" style="border-radius: 10px;width:120px">
</form>
  </div>
  </div>
  </div>
  </div>
    </div>
    @endforeach


  <div class=" row">
      <div class="col-8"></div>
      <div class="col-4">
    <div style="font-size:large; margin-top:30px" class="row pb-2">
          <span>OrderTotal:</span>
          <span style="font-weight: bold;"> <span>EGP </span>{{session('x')}}</span>
      </div>
    <div class="row pb-2" style="font-size:large;">
       <a href="/products" class="btn btn-info" style="border-radius: 10px; padding: 15px; font-weight: bold; width:400px">Continue Shopping</a></div>

    <div class="row pb-2">
       <a href="/edituser/{{$i}}/edit" class="btn btn-info" style="font-weight: bold; padding: 15px;border-radius: 10px; font-size:medium; width: 400px;">PROCEED TO CHECKOUT</a><br>
       </div>
    </div>
</div>
@else
<h3 style="margin-top: 100px">No Order Now</h3>
<small><a href="/products">Containue Shopping</a></small>
@endif
  </div>
@endsection
