@extends('user.layout')
@section('contentuser')
<main class="container-fluid" style="margin-top: 50px;background-color: rgb(234, 226, 240);padding:70px ;">
    <div>
<h2 class="text-info text-center pb-4" style="font-weight: bold">OUR PRODUCTS</h2>
        <section class="text-center mb-4">

          <!--Grid row-->
          <div class="row wow fadeIn">

            <!--Grid column-->
            @foreach($product as $prd)
            <div class="col-lg-3 col-md-6 mb-4">

              <!--Card-->
              <div class="card" style="border-radius: 15px;height:350px">

                <!--Card image-->
                <div class="view overlay">
                <img src="public/img/{{$prd['product_image']}}" class="card-img-top pt-2" class="card-img-top"
                    alt="" style="height: 200px;width:200px">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body text-center">
                  <!--Category & Title-->
                  <a href="" class="grey-text">
                    <!-- <h5>samsung</h5> -->
                  </a>
                  <h5>
                    <strong>
                      <a href="prod/{{$prd['id']}}" class="dark-grey-text" style="text-decoration: none; color:grey">{{$prd['product_name']}}
                        <span class="badge badge-pill danger-color">NEW</span>
                      </a>
                    </strong>
                  </h5>

                  <h4 class="font-weight-bold blue-text">
                    <strong>{{$prd['product_price']}}$</strong>
                  </h4>

                </div>

                <!--Card content-->

              </div>
              <!--Card-->

            </div>
@endforeach
            </div>




        </section>
    </div>
  </main>

@endsection
