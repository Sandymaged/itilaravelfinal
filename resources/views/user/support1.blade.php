@extends('user.layout')
@section('contentuser')
<div class="container">
    <div class="row justify-content-center" style="margin-bottom: 330px">
        @if (session('s'))
        <div class="alert alert-success" style="margin-top:80px ">
            {{ session('s') }}
        </div>
        @endif
        <div class="col-2"></div>
        <div class='col-8' style="margin-top:80px ">
         <h3 class="row text-info">Your Problem</h3>
         <div class="row" style="color: gray"><span>*Hi, Here Our Team Will Send All Update About Your Device.</span>
             <span class="row pl-5">We Are Here To Solve Your Device, Thanks For Trusted. </span>
        </div><br>
         <div class="row bg-light p-3" style="border-radius: 20px">
           <span>  <span style="font-weight:bold; font-size:x-large">Your Device Status: </span><span style="color: gray;font-size:large">{{$pro['status']}}</span></span>
         </div>
        </div>
        <div class="col-2"></div>
</div>
</div>
@endsection
