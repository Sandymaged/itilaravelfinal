@extends('admin.layout')
@section('contentadmin')
<div class="card" style="border-radius: 30px">
    <div class="card-header bg-info" style="border-radius: 10px">
      <h3>Add Brand</h3>
    </div>
    <div class="card-body">

        <form method="post" action="{{url('brand')}}" enctype="multipart/form-data">
            {{csrf_field()}}
    <div class="row mb-2">
      <div class="col-3">
    <label class="form-label">Brand Name</label></div>
    <div class="col-9">
  <input class="form-control" type="text" name="brand_name" required class="@error('brand_name') is-invalid @enderror">
  @error('brand_name')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
  </div>

      <br>
  <button class="btn btn-info" style="float: right;">submit</button>

  </form>
  </div>
  </div>

@endsection
