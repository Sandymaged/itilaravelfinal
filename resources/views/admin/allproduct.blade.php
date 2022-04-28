@extends('admin.layout')
@section('contentadmin')
<div class="row">
    @foreach($products as $data)

    <div class="col-4 mb-3">
      <div class="card" style="width: 18rem;">
       <img src="public/img/{{$data['product_image']}}" style="height:200px;width:200px;margin:10px;margin-left:35px;">
        <div class="card-body">
          <h5 class="card-title">{{$data['product_name']}}</h5>

          <p class="card-text" style="float:right"><a href="/prod/{{$data["id"]}}/edit" class="btn btn-info" style="text-decoration: none;color: black;">Edit
            </a>
          </p>
          <form action="/prod/{{$data['id']}}" method="POST" style="float:right;">
            @method("delete")
            @csrf
        <input type="submit" class="btn btn-danger" value="Delete">
        </form>
        </div>
      </div>
    </div>

  @endforeach
  </div>

@endsection
