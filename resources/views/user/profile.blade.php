@extends('user.layout')
@section('contentuser')

  <div class="container" style="margin-top: 100px;margin-bottom:110px">
    <div class="mb-5">
     <h4 style="font-weight: bold;" class="row text-info"> YOUR PROFILE</h4>
     <small class="row" style="padding-left:10px ;"><a href="/index" style="color: black;text-decoration:none;">Home</a></small>
    </div>

  <div class="row">
    <a class="col-7 bg-light p-5 mr-3" style="border-radius: 10px; font-size: large; font-weight: bold;color: black;text-decoration:none;" href="/orderss"><i class='fas fa-cart-plus' style='font-size:30px;color:#007bff;padding-right: 8px;'></i>
      YOUR ORDERS</a>
    <a class="col-4 bg-light p-5" style="border-radius: 10px;font-size: large; font-weight: bold;color: black;text-decoration:none;" href="/profileinfo"><i class='fas fa-user-circle' style='font-size:30px;color:#007bff ;padding-right: 8px;'></i>
      YOUR PROFILE</a>

  </div>
  <br>
  <div class="row">
    <a class="col-4 bg-light  p-5 mr-3" style="border-radius: 10px;font-size: large; font-weight: bold;color: black;text-decoration:none;" href="/support"><i class='far fa-question-circle
      ' style='font-size:30px;color:#007bff ;padding-right: 8px;'></i>SUPPORT</a>
    <a class="col-7 bg-light p-5" style="border-radius: 10px;font-size: large; font-weight: bold;color: black;text-decoration:none;" href="/checkout2"><i class='fas fa-shopping-cart' style='padding-right: 8px;font-size:30px;color:#007bff;'></i>

      YOUR CART</a>
  </div>

  </div>
  @endsection
