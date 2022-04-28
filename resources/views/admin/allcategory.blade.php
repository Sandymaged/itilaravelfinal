@extends('admin.layout')
@section('contentadmin')
<div class="row">
    @foreach($products as $data)

    <div class="col-4 mb-3">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$data['category_name']}}</h5>
          <p class="card-text" style="float:right"><a class="btn btn-info" href="/cat/{{$data["id"]}}/edit" style="color: white;">Edit
            </a>
          </p>
          <form action="/cat/{{$data["id"]}}" method="POST" style="float:right;">
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
