<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Instageek</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/custom-style.css') }}" rel="stylesheet">
    <style type="text/css">
       .imgs:hover {
           cursor: pointer;
       }
       input[type=submit] {
           display: none;
       }
    </style>
      </head>

<body>

    <nav class="navbar navbar-pad navbar-expand-md navbar-dark fixed-top bg-green">
      <div class="col-md-3 offset-2">
        <!-- Branding Image -->
        @guest
        <a class="navbar-brand" href="{{ route('default') }}">
            Instageek
        </a>
        @else
        <a class="navbar-brand" href="{{ route('home') }}">
            Instageek
        </a>
        @endguest       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <div class="col-md-5">
        <div class="collapse navbar-collapse" id="navbarCollapse"> 
            @guest
            <form class="form-inline ml-3 mt-2 mt-md-0 mr-auto">
            <input class="form-control mr-sm-2" type="hidden" placeholder="Search" aria-label="Search">
            </form>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                </li>
                <li class="nav-item active">
                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                </li>
            </ul>    
            @else
            <form class="form-inline ml-3 mt-2 mt-md-0 mr-auto">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </form>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Upload</span></a>
                </li>
                <li class="nav-item dropdown active">
                    <a href="#" class="dropdown-toggle nav-link" id="dropdown01" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" role="menu" aria-labelledby="dropdown01">
                            <a href="{{ route('logout') }}" class="nav-link dropdown-item" 
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                    </div>
                </li>
            </ul>
            @endguest                 
        </div>
      </div>      
    </nav>


    @yield('content')
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>