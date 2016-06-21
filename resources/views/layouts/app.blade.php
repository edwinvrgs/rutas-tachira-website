<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Páginas para el transporte público">
    <meta name="author" content="Edwin">
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <link rel="icon" href="../../favicon.ico">

    <title>Rutas Táchira</title>

    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <style>
      body {
        font-family: 'Lato';
        margin-top: 60px;
      }

      .fa-btn {
        margin-right: 8px;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('/') }}"><i class="fa fa-btn fa-bus" aria-hidden="true"></i>Rutas Táchira</a>
        </div>
        <div class="collapse navbar-collapse" aria-expanded="false">
        <!-- Left Side Of Navbar -->
          <ul class="nav navbar-nav">
           <li {{{ (Request::is('/') ? 'class=active' : '') }}} ><a href="{{ url('/') }}">Inicio</a></li>
           <li {{{ (Request::is('rutas') ? 'class=active' : '') }}} ><a href="{{ url('rutas') }}">Rutas</a></li>
           <li {{{ (Request::is('sugerencias') ? 'class=active' : '') }}} ><a href="{{ url('sugerencias') }}">Sugerencias</a></li>
          </ul>
          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                Invitado<span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ url('/login') }}"><i class="fa fa-btn fa-sign-in" aria-hidden="true"></i>Iniciar sesión</a></li>
                  <li><a href="{{ url('/register') }}"><i class="fa fa-btn fa-user-plus" aria-hidden="true"></i>Registrarse</a></li>
                </ul>
              </li>
            @else
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->first_name.' '.Auth::user()->last_name }} <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Cerrar sesión</a></li>
                </ul>
              </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      @if (Auth::guest() && (Request::is('rutas') || Request::is('sugerencias')))
        @include('layouts.error')
      @else
        @yield('content')
      @endif
    </div>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    <script type="text/javascript">
      $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
      });
    </script>

    @yield('scripts')
  </body>
</html>
