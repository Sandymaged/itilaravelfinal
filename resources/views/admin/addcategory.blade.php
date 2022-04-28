@extends('admin.layout')
@section('contentadmin')
<div class="card" style="border-radius: 30px">
    <div class="card-header bg-info" style="border-radius: 10px">
      <h3>Add Category</h3>
    </div>
    <div class="card-body">

        <form method="post" action="{{url('cat')}}" enctype="multipart/form-data">
            {{csrf_field()}}
    <div class="row mb-2">
      <div class="col-3">
    <label class="form-label">Category Name</label></div>
    <div class="col-9">
  <input class="form-control" type="text" name="category_name"   class="@error('category_name') is-invalid @enderror">
  @error('category_name')
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
