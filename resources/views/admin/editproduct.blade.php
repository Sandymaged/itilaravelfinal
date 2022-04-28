@extends('admin.layout')
@section('contentadmin')
<div class="card" style="border-radius: 3%">
    <div class="card-header bg-info">
      <h3>Add Product</h3>
    </div>
    <div class="card-body">

        <form method="post" action="{{url('prod/'.$prod->id)}}">
            @method("PUT")
             {{csrf_field()}}
    <div class="row mb-2">
      <div class="col-3">
    <label class="form-label">Product Name</label></div>
    <div class="col-9">
  <input class="form-control" type="text" name="product_name" value="{{$prod->product_name}}" required>
  </div>
  </div>
  <div class="row mb-2">
  <div class="col-3">
  <label class="form-label">Product Description</label></div>
  <div class="col-9">
  <input class="form-control" required type="text" value="{{$prod->product_description}}" name="product_description" >

  </div>
  </div>
  <div class="row mb-2">
    <div class="col-3">
   <label class="form-label" style="font-size: large; font-weight: 20px;">Product image</label></div>
    <div class="col-9">
  <input class="form-control" type="file" required name="product_image" value="{{$prod->product_image}}">

  </div>
  </div>
  <div class="row mb-2">
    <div class="col-3">
    <label class="form-label">Product code</label></div>
    <div class="col-9">
    <input class="form-control" required type="text" name="product_code" value="{{$prod->product_code}}">

    </div>
    </div>
  <div class="row mb-2">
    <div class="col-3">
  <label class="form-label">Product quantity</label></div>
    <div class="col-9">
  <input class="form-control" type="number" required name="product_qantity" value="{{$prod->product_quantity}}">

  </div>
  </div>
  <div class="row mb-2">
    <div class="col-3">
  <label class="form-label">Product price</label></div>
    <div class="col-9">
  <input class="form-control" type="number" #price="ngModel" required name="product_price" value="{{$prod->product_price}}" >

  </div>
  </div>

  <div class="row mb-2">
    <div class="col-3">
  <label class="form-label">Category</label></div>
    <div class="col-9">
  <input class="form-control" type="number" name="category_id" value="{{$prod->category_id}}"></div>
  </div>
  <div class="row mb-2">
    <div class="col-3">
  <label class="form-label">Brand</label></div>
    <div class="col-9">
  <input class="form-control" type="number" name="brand_id" value="{{$prod->brand_id}}"></div>
  </div><br>
  <button class="btn btn-info" style="float: right;">submit</button>

  </form>
  </div>
  </div>


@endsection
