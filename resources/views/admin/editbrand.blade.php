@extends('admin.layout')
@section('contentadmin')
<div class="card" style="border-radius: 3%">
    <div class="card-header bg-info">
      <h3>Add Brand</h3>
    </div>
    <div class="card-body">

        <form method="post" action="{{url('brand/'.$prod->id)}}">
            @method("PUT")
             {{csrf_field()}}
    <div class="row mb-2">
      <div class="col-3">
    <label class="form-label">Brand Name</label></div>
    <div class="col-9">
  <input class="form-control" type="text" name="brand_name" value="{{$prod->brand_name}}" required>
  </div>
  </div>
  <br>
  <button class="btn btn-info" style="float: right;">submit</button>

  </form>
  </div>
  </div>


@endsection
