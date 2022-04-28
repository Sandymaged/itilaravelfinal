@extends('user.layout')
@section('contentuser')
<main class="mt-5 pt-4" style="margin-bottom: 50px">
    <div class="container dark-grey-text mt-5" >

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-7 mb-4">
            <img src="http://localhost:8000/public/img/{{$product['product_image']}}" style="height:300px;width:300px; margin-left:100px">


        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-5 mb-4">

          <!--Content-->
          <div class="p-4">

<form method="POST" action="/checkout">
    {{csrf_field()}}

            <p class="lead">
              <span class="mr-1">
                <h1 class="lead font-weight-bold" style="font-size: 30px;">{{$product['product_name']}}</h1>

 <input type="hidden" value="{{$product['product_name']}}" name="product_name">
 <input type="hidden" value="{{$product['id']}}" name="product_id">

           </span>
            </p>

            <p>
              {{$product['product_description']}}

            </p>
            <span style="color:gray">Now:</span><span class="lead font-weight-bold"> EGP {{$product['product_price']}}</span>
<br><br><span style="font-size: medium;">Quantity</span>
              <!-- Default input -->
<select name="order_quantity" class="form-select" style="width:150px;">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>

</select>             <br>

              <input class="btn btn-primary btn-md my-0 p" type="submit" value="Add to cart ">
            </form>
            </div>

          <!--Content-->

        </div>
        <!--Grid column-->

      </div>

    </div>
  </main>
@endsection
