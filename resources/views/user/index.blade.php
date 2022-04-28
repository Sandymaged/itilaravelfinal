@extends('user.layout')
@section('contentuser')
<div id="carousel-example-1z" class="carousel slide carousel-fade pt-4" data-ride="carousel">


    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->

      <div class="carousel-item active">
        <div class="view">

<img src="public/img/mobiles-phones-banner.png" height="500px" width="100%" style="padding-top: 30px">
        </div>
          <!-- Mask & flexbox options-->

          <!-- Mask & flexbox options-->
      </div>
      <!--/First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="view">
          <img src="public/img/Mobileciti-MobilePhones-Category.jpg" height="500px" width="100%" style="padding-top: 30px">

          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Second slide-->

      <!--Third slide-->

            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      <!--/Third slide-->

    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

  <!--/.Carousel Wrapper-->

  <!--Main layout-->
  <main style="margin: 20px;">
   <h1 style="margin-top: 30px;"  class="text-info">All Product</h1>
    <a href="/products"><input type="button" value="shop now" class="btn btn-info" style="margin-left:1100px;margin-bottom:30px"/></a>
    <div class="container">

      <!--Navbar-->

      <!--/.Navbar-->

      <!--Section: Products v.3-->
      <section class="text-center mb-4" >
        <!-- <p align="right">
          <input type="button" value="shop now"class="btn btn-info" />
        </p> -->
        <!--Grid row-->
        <div class="row wow fadeIn">
            @foreach($product as $prd)

          <!--Grid column-->
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

          <!--Grid column-->

          <!--Grid column-->

              <!--Card content-->

            <!--Card-->
@endforeach

          </div>




      </section>
      <!--Section: Products v.3-->

      <!--Pagination-->







    </div>
  </main>

  <main style="margin: 20px;">
    <h1 style="margin-bottom: 10px;"  class="text-info">New Arrival</h1>
    <div class="container"  >

      <!--Navbar-->

      <!--/.Navbar-->

      <!--Section: Products v.3-->
      <section class="text-center mb-4">
        <p align="right">
          <input type="button" value="shop now" routerLink="/newarrival" class="btn btn-info" />
        </p>

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          @foreach($product as $prd)
          <div class="col-lg-3 col-md-6 mb-4" >

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

          <!--Grid column-->

          <!--Grid column-->

              <!--Card content-->

            <!--Card-->
            @endforeach
          </div>



      </section>
      <!--Section: Products v.3-->

      <!--Pagination-->








    </div>
  </main>
  <main  style=" background-color: rgb(234, 226, 240);">
    <h1 style="margin: 30px; padding-top: 20px;"  class="text-info">Shop By Brand</h1>
    <div class="container" style="padding: 20px; background-color: rgb(234, 226, 240);">
        <!--Navbar-->

        <!--/.Navbar-->

        <!--Section: Products v.3-->
        <section class="text-center mb-4">

          <!--Grid row-->
          <div class="row">
  <!-- <div *ngFor="let brand of receivecatarray2; let i=index; "> -->
    <div>
        @foreach($brand as $brd)

    <button style="font-size: 30px; margin-left: 100px; border-radius: 10px; border-color: black; background-color: white; "class="btn">{{$brd['brand_name']}}</button>
@endforeach
</div>
          </div>
        </section>
    </div>
  </main>
    <main style="margin: 20px;">
    <h1 style="margin-bottom: 30px;" class="text-info">Top Trendy</h1>
    <div class="container"  >

      <!--Navbar-->

      <!--/.Navbar-->

      <!--Section: Products v.3-->
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
            </div>
            @endforeach
            <!--Card-->



          <!--Grid column-->

          <!--Grid column-->

              <!--Card content-->

            <!--Card-->

          </div>



      </section>
      <!--Section: Products v.3-->

      <!--Pagination-->








    </div>
  </main>

  <div style=" background-color: rgb(234, 226, 240);">
    <h1 style="margin: 30px; padding-top: 20px;"  class="text-info">Support Team</h1>

      <p style="margin-left: 350px; font-size: 30px;">
        Need support? We are here to help
    <br>
    Our team is available 7 days a week to assist you.
    <br>
    send us an email on support@thelucky.app
      </p>
      <button style="margin-left: 1000px;" class="btn btn-primary mb-3">Shop Now</button>
    </div>
@endsection
