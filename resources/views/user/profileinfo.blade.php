@extends('user.layout')
@section('contentuser')
  <div class="container" style="margin-top: 110px;margin-bottom:90px">
    <h2 class="text-info pb-5">Profile Info</h2>
  <div class="row cart bg-light" style="height: 300px; border-radius: 50px;">
    <div class="col-2 p-5"></div>
  <div class="col-6 pt-4">
    <div class="row pb-2"><h5 style="font-weight: bold;">USERNAME:</h5><span style="margin-left: 20px; color: gray;">{{$s}}</span></div>
    <div class="row pb-2"><h5 style="font-weight: bold;">EMAIL:</h5><span style="margin-left: 20px; color: gray;">{{$e}}</span></div>
    <div class="row pb-2"><h5 style="font-weight: bold;">MOBILE NUMBER:</h5><span style="margin-left: 20px; color: gray;">{{$p}}</span></div>
    <div class="row pb-2"><h5 style="font-weight: bold;">YOUR ADDRESS:</h5><span style="margin-left: 20px; color: gray;">{{$a}}, {{$c}}</span></div>
  </div>
  <div class="col-3 P-4" style="margin-top: 50px; margin-left: -50px;">
    <div class="row" ><a href="/user/{{$i}}/edit" class="btn btn-info mb-3" style="border-radius: 20px; font-size: medium;font-weight: bold; width: 400px;">EIDT YOUR PROFILE</a></div>

    <div class="row" >

        <a class="btn btn-info" style="border-radius: 20px; font-size: medium;font-weight: bold; width: 400px;" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">{{ __('logout') }}</a>

    </div>

  </div>
  </div>
  </div>
@endsection
