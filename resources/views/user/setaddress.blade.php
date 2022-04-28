@extends('user.layout')
@section('contentuser')

<div class="container">
    <div class="row justify-content-center" style="margin-bottom: 150px;margin-top:70px">
        <div class="col-7">
            @if($user->id>0)
            <div class="card" style="margin-top: 80px;height:300px;width:600px; margin-left:20px;border-radius: 40px">
                <div class="card-header bg-info" style="border-radius: 10px ">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="post" action="{{url('edituser/'.$user->id)}}">
                        @method("PUT")
                         {{csrf_field()}}

              <div class="row mb-2">
                <div class="col-3">
                <label class="form-label">Address</label></div>
                <div class="col-9">
                <input class="form-control" required type="text" name="address" value="{{$user->address}}" name="address">

                </div>
                </div>
                <div class="row mb-2">
                    <div class="col-3">
                    <label class="form-label">city</label></div>
                    <div class="col-9">
                    <input class="form-control" required type="text" name="city" value="{{$user->city}}" name="city">

                    </div>
                    </div>
              <div class="row mb-2">
                <div class="col-3">
              <label class="form-label">phone</label></div>
                <div class="col-9">
              <input class="form-control" type="number" required name="phone" value="{{$user->phone}}">

              </div>
              </div>


              <br>
              <button class="btn btn-info" style="float: right;">submit</button>

              </form>
                </div>
            </div>
        </div>
 @else
 <p>no item added</p>
 @endif
    </div>    </div>
</div>


@endsection
