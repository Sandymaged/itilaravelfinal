<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <style>
            body{
            font-family: cursive;
              }  </style>
    </head>
    <body>

        <div class="container-fluid px-4 py-2">
            <div class="row">
              <div class="col-2 bg-info"style="padding: 20px; border-radius: 3%; height:600px;">
                <div class="row mb-3" style="display: inline"><span>Hello,</span>
<span>
                    @guest
                    @if (Route::has('login'))
                        <span class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </span>
                    @endif

                    @if (Route::has('register'))
                        <s class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </s>
                    @endif
                @else
                    <span class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: black;text-decoreaction:none;margin-bottom:10px">
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </span>
                @endguest
            </span>
                    </div>
                <div style="height: 130px;
                width: 130px;
                background-color:white;
                border-radius: 50%;margin-left: 10px;"><h5 style="padding-top: 50px;padding-left: 10px;">Mobile Shop</h5></div>

                <div style="font-size: 18px; margin-top: 20px;">
                  <br><br>
                <div class="row" style="display: inline;"><span><i class='fas fa-plus' style='font-size:20px;color:white'></i></span>
                 <a href="/prod/create" style="text-decoration: none; color: black;">Add Product</a></div><br><br>
                 <div class="row" style="display: inline; padding-top: 20px;"><span><i class='fas fa-plus' style='font-size:20px;color:white'></i></span>
                  <a href="/brand/create" style="text-decoration: none; color: black;">Add Brand</a></div><br><br>
                  <div class="row" style="display: inline;"><span><i class='fas fa-plus' style='font-size:20px;color:white'></i></span>
                    <a href="/cat/create" style="text-decoration: none; color: black;">Add Category</a></div><br><br>
                  <div class="row" style="display: inline;"><span><i class='fas fa-exclamation-triangle' style='font-size:20px;color:white'></i></span>
                    <a href="problem" style="text-decoration: none; color: black;">Problems</a></div>
                </div>


            </div>
              <div  class="col-10">
                <div class="row"><a class="btn btn-info" href="/prod" style="text-decoration: none; color: black;width: 150px;margin-left: 150px;">Products</a>
                  <a class="btn btn-info" href="/cat" style="text-decoration: none; color: black;width: 150px;margin-left: 150px;">Categories</a>
                  <a class="btn btn-info" href="/brand" style="text-decoration: none; color: black;width: 150px;margin-left: 150px;">Brands</a>
                </div>
                <div class="row"  style="padding: 50px;">
                    @yield('contentadmin')
                </div>
            </div>
              </div>
            </div>
    </body>
</html>
