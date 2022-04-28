@extends('admin.layout')
@section('contentadmin')
<div class="card" style="border-radius: 30px">
    <div class="card-header bg-info" style="border-radius: 10px">
      <h3>Add Product</h3>
    </div>
    <div class="card-body">

        <form method="post" action="{{url('prod')}}" enctype="multipart/form-data">
            {{csrf_field()}}
    <div class="row mb-2">
      <div class="col-3">
    <label class="form-label">Product Name</label></div>
    <div class="col-9">
  <input class="form-control" type="text" name="product_name" required class="@error('product_name') is-invalid @enderror">
  @error('product_name')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
  </div>

  <div class="row mb-2">
  <div class="col-3">
  <label class="form-label">Product Description</label></div>
  <div class="col-9">
  <input class="form-control" type="text" name="product_description" required class="@error('product_description') is-invalid @enderror"></div>
  @error('product_description')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
  <div class="row mb-2">
    <div class="col-3">
   <label class="form-label" style="font-size: large; font-weight: 20px;">Product image</label></div>
    <div class="col-9">
  <input class="form-control" type="file"  name="product_image" required class="@error('product_image') is-invalid @enderror"></div>
  @error('product_image')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror  </div>
  <div class="row mb-2">
    <div class="col-3">
  <label class="form-label">Product quantity</label></div>
    <div class="col-9">
  <input class="form-control" type="number" name="product_quantity"required class="@error('product_quantity') is-invalid @enderror"></div>
  @error('product_quantity')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
  <div class="row mb-2">
    <div class="col-3">
  <label class="form-label">Product code</label></div>
    <div class="col-9">
  <input class="form-control" type="text" name="product_code" required class="@error('product_code') is-invalid @enderror"></div>
  @error('product_code')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
  <div class="row mb-2">
    <div class="col-3">
  <label class="form-label">Product price</label></div>
    <div class="col-9">
  <input class="form-control" type="number" name="product_price" required class="@error('product_price') is-invalid @enderror"></div>
  @error('product_price')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

  <div class="row mb-2">
    <div class="col-3">
  <label class="form-label">Category</label></div>
    <div class="col-9">
        <select name="category_id" class="@error('category_id') is-invalid @enderror">
            @foreach($category as $c)
            <option disabled selected>Choose Category</option>
            <option value="{{$c['id']}}">{{$c['category_name']}}</option>
            @endforeach
        </select>
      @error('category_id')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div></div>

      <div class="row mb-2">
        <div class="col-3">
      <label class="form-label">Brand</label></div>
        <div class="col-9">
            <select name="brand_id" required class="@error('brand_id') is-invalid @enderror">
                <option disabled selected>Choose Brand</option>

                @foreach($brand as $b)
                <option value="{{$b['id']}}">{{$b['brand_name']}}</option>
                @endforeach
            </select>
          @error('brand_id')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div></div>
      <br>
  <button class="btn btn-info" style="float: right;">submit</button>

  </form>
  </div>
  </div>

@endsection
