@extends('user.layout')
@section('contentuser')
<div class="container" style="margin-bottom: 300px">
<div style="margin-top: 100px;">
        <div class="row" style="margin-left: 30px;"><h3 style="font-weight: bold;" class="text-info">YOUR CART</h3><br>
        </div>
        <span class="row" style="margin-left: 30px;display:inline-block;"><a  style="color:black; text-decoration: none;" href="/index">Home /</a><a style="color:black; text-decoration: none;" href="/checkout2">Your Cart</a>
        </span>
    </div>
    @if ($d>0)
        <form method="post" action="/checkout3">
            {{csrf_field()}}
<div class="cart bg-light p-5" style="border-radius:20px ;margin-top: 50px;">
    <span class="row"  style="font-weight: bold; font-size: 18px;">Order Shipping: 30 EGP</span> <br>
    <input type="hidden" name="shipping" value="30">
    <span class="row"  style="font-weight: bold; font-size: 18px;">Order Total:  {{$x+30}} EGP</span> <br>
    <input type="hidden" name="total_price" value="{{$x+30}}">
    <input type="hidden" name="total" value="{{$x}}">
    <div class="row" style="float: right;">
        <input class="btn btn-info" style="margin-bottom:30px;font-weight: bold;padding: 10px;border-radius: 10px;" type="submit" value="Checkout">
    </div>
</div>


</form>

@else
<h3 style="margin-top: 60px">No Order Added</h3>
<small><a href="/products">Containue Shopping</a></small>
@endif
</div>


@endsection
