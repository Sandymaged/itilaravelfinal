@extends('admin.layout')
@section('contentadmin')
@foreach($problem as $pro)

<div class="card" style="border-radius: 3%">
    <div class="row card-body">

<div class="col-3">{{$pro['mobile_type']}}</div>
<div class="col-3">{{$pro['description']}}</div>
    <div class="col-3">
        <form method="post" action="{{url('sup/'.$pro->id)}}">
            @method("PUT")
            {{csrf_field()}}
    <select class="form-select" name="status">
        <option>{{$pro['status']}}</option>
        <option value="our support team will contact with you">our support team will contact with you</option>
        <option value="Recevied your phone will take 5 days">Recevied your phone will take 5 days</option>
        <option value="Congrates,phone was repair will send after 2 days">Congrates,phone was repair will send after 2 days</option>

    </select>

    </div>
    <div class="col-3"><input class="btn btn-info" value="UPDATE" type="submit"></div>
</form>
    </div>
  </div>
@endforeach

@endsection
