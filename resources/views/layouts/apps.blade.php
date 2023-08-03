{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}



<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>G-School </title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link rel="stylesheet" href="{{asset('assets/plugins/iconic/css/material-design-iconic-font.min.css')}}">
	<link href="{{asset('assets/fonts/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/fonts/font-awesome/v6/css/all.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/fonts/material-design-icons/material-icon.css')}}" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/plugins/summernote/summernote.css')}}" rel="stylesheet">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/material/material.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/material_style.css')}}">
	<!-- inbox style -->
	<link href="{{asset('assets/css/pages/inbox.min.css')}}" rel="stylesheet" type="text/css" />
     {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
	<!-- Theme Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/pages/login.css')}}">
	<link href="{{asset('assets/css/theme/light/theme_style.css')}}" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="{{asset('assets/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/theme/light/style.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/theme/light/theme-color.css')}}" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="https://www.einfosoft.com/templates/admin/smart/source/assets/img/favicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">
</head>
<!-- END HEAD -->

<body>




    @yield('content')
 @include('cookie-consent::index')
    {{-- <div id="lawmsg" class="alert alert-info alert-dismissible h6 fade show fixed-bottom" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        &nbsp; Nous utilisons des cookies sur ce site pour vous distinguer des autres utilisateurs. &nbsp; We use this data to enhance your experience and for targeted advertising. &nbsp; By continuing to use this website you consent to our use of cookies. &nbsp; For more information, please see our &nbsp;
        <a href="https://loteriebenin.com/mentions-legale" target="_blank">Cookie Policy</a>.
    </div>
    <script>

//  Cookie Law  Jvascript, from http://W3Schools.com

function setCookie(cookieName, cookieValue, numdaystilexpireasinteger) {
  var d = new Date();
  d.setTime(d.getTime() + (numdaystilexpireasinteger*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cookieName+ "=" + cookieValue + ";" + expires + ";path=/";
}

function getCookie(cookieName) {
  var name = cookieName+ "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
          c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
      }
  }
  return "";
}

function showLaw() {
  var x = getCookie("cookieName");  //call cookie to get its value
  if (x != "") {
      $("#lawmsg").remove();
  } else {
          setCookie("cookieName", "cookieValue", 2);
      }
  }
    </script> --}}

    <!-- START Bootstrap-Cookie-Alert -->
<div class="alert text-center cookiealert" role="alert">
    <b>Aimez-vous les cookies ?</b> &#x1F36A;  Nous utilisons des cookies pour vous garantir la meilleure expérience sur notre site web. <a href="https://cookiesandyou.com/" target="_blank">Learn more</a>
     🍪
    <button type="button" class="btn btn-primary btn-sm acceptcookies">
         J'accepte
    </button>
</div>
<!-- END Bootstrap-Cookie-Alert -->
<script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>

	<!-- start js include path -->
	<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('assets/plugins/popper/popper.js')}}"></script>
	<script src="{{asset('assets/plugins/jquery-blockui/jquery.blockui.min.js')}}"></script>
	<script src="{{asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
	<script src="{{asset('assets/plugins/feather/feather.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
	<script src="{{asset('assets/plugins/sparkline/jquery.sparkline.js')}}"></script>
	<script src="{{asset('assets/js/pages/sparkline/sparkline-data.js')}}"></script>
	<!-- Common js-->
	<script src="{{asset('assets/js/app.js')}}"></script>
	<script src="{{asset('assets/js/layout.js')}}"></script>
	<script src="{{asset('assets/js/theme-color.js')}}"></script>
	<!-- material -->
	<script src="{{asset('assets/plugins/material/material.min.js')}}"></script>
	<!--apex chart-->
	{{-- <script src="{{asset('assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
	<script src="{{asset('assets/js/pages/chart/apex/home-data.js')}}"></script> --}}
	<!-- summernote -->
	<script src="{{asset('assets/plugins/summernote/summernote.js')}}"></script>
	<script src="{{asset('assets/js/pages/summernote/summernote-data.js')}}"></script>
	<!-- end js include path -->
</body>


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Oct 2022 13:30:52 GMT -->
</html>
