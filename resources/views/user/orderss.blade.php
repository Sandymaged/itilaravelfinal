@extends('user.layout')
@section('contentuser')

<div class="container" style="margin-top: 100px;">
    <div class="row"><H3 style="font-weight: bold;">YOUR ORDERS</H3></div>
    @foreach($check as $checkout)
  <div class="col-9 bg-light mb-3 py-3" style="border-radius: 40px;">
    <span class="row pl-5"><img src='public/img/{{$checkout['product_image']}}' style="width: 150px;height:150px"></span>
    <span class="row pl-5">{{$checkout['product_name']}}</span>
    <span class="row pl-5">{{$checkout['order_quantity']}}</span>
      <span class="row pl-5">{{$checkout['product_price']*$checkout['brand.order_quantity']}}</span>
  </div>
  @endforeach
  </div>


@endsection
