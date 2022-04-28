@extends('user.layout')
@section('contentuser')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <img src="http://localhost:8000/public/img/ss.png" style="width:500px;height:450px;margin-top:90px">
        </div>
        <div class="col-7">
            @if (session('s'))
            <div class="alert alert-success" style="margin-top:20px ">
                {{ session('s') }}
            </div>
            @endif
            <div class="container">
                <div class="row justify-content-center" style="margin-bottom: 240px;margin-top:50px">
                    <div class="col-7">

                        <div class="card" style="margin-top: 100px;height:200px;width:600px;border-radius: 40px">
                            <div class="card-header bg-info" style="border-radius: 10px;color:white ">Set Your Problem</div>

                                <div class="card-body">
                                    <form method="post" action="{{url('sup')}}">
                                         {{csrf_field()}}

                              <div class="row mb-2">
                                <div class="col-3">
                                <label class="form-label">Mobile Type</label></div>
                                <div class="col-9">
                                <input class="form-control" required type="text" name="mobile_type">

                                </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-3">
                                    <label class="form-label">Description</label></div>
                                    <div class="col-9">
                                    <textarea class="form-control" required type="text" name="description">
                                    </textarea>
                                    </div>
                                    </div>

                              <br>
                              <button class="btn btn-info" style="float: right;">submit</button>

                              </form>
                        </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection
