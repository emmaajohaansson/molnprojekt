<!-- Stored in resources/views/layouts/app.blade.php -->
<html>
  <head>
    <title>Gamelink.se | @yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="/public/js/app.js" defer></script>
    <script src="/public/js/modal.js" defer></script>

    <!-- Styles -->
    <link href="/public/css/app.css" rel="stylesheet">
    <link href="/public/css/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="/public/favicon.ico">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="/public/css/fontawesome-all.css" rel="stylesheet"/>

  </head>
  <body>
    <nav class=" text-center text-uppercase font-weight-light navbar navbar-expand-lg navbar-dark bg-dark m-0">
      <a class="navbar-brand" href="/#">
        <i class="fal fa-gamepad"></i> + <i class="fal fa-link"></i>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/"><i class="fal fa-home"></i> Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/games"><i class="fal fa-gamepad"></i> All Games</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li><a class="nav-link" href="{{ route('login') }}"><i class="fal fa-sign-in"></i> {{ __('Login') }}</a></li>
                <li><a class="nav-link" href="{{ route('register') }}"><i class="fal fa-user-plus"></i> {{ __('Register') }}</a></li>
            @else
                <li class="nav-item dropdown text-center">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class="fal fa-user"></i> <?php echo ucfirst(Auth::user()->username); ?> <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right bg-verydark text-light text-center" aria-labelledby="navbarDropdown">
                      <h6 class="dropdown-header">Account menu</h6>
                      <a class="bg-verydark dropdown-item text-light" href="/myprofile">
                        <i class="fal fa-user"></i> Profile
                      </a>
                      <a class="bg-verydark dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fal fa-sign-out"></i> {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                    </div>
                </li>
            @endguest
        </ul>
      </div>


    </nav>
    <div class="container-fluid">
      @yield('content')
    </div>
  </body>
</html>
