<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <!-- {{ config('app.name', 'Laravel') }} -->
                        <img class="logo" src="images/flottec-logo.svg">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">

                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            
                            
                            <li><a class="small" href="{{ url('/register') }}"><b>{{ trans('navbar.register') }}</b></a></li>
                            <li><a class="small" href="{{ url('/login') }}"><b><font color="#1966cb">LOG IN</font></b></a></li>
                        @else
                            @if (Auth::user()->type)
                                <li><a class="small" href="{{ url('/blacklist') }}">{{ trans('navbar.blacklist') }}</a></li>
                                <li><a class="small" href="{{ url('/blocked') }}">{{ trans('navbar.blocked') }}</a></li>
                            @endif
                            
                            <li class="dropdown">
                                <a class="small" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a class="small" href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ trans('navbar.logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif

                        <li><a class="small" href="{{ url('') }}"><b><font color="#1966cb">{{ trans('navbar.en') }} <img src="images/us.png"> / {{ trans('navbar.es') }} <img src="images/mx.png"></font></b></a></li>
                       
                    </ul>
                    <br><br>
                    <br><div style="margin-left: 925px;"><input class="generated" value="" placeholder="Search" id="search" name="search">&emsp;<img src="images/search.svg"></div><br>
                    
                    <div style="margin-left: 790px;">
                    <table><tr>
                        <td><div style="background-color: #03387e; width: 40px ; height: 50px;"><center><img style="margin-top: 17px;" src="images/contact.svg"><center></div></td><td><a class="small" href="{{ url('/contact-us') }}"><div style="background-color: #1966cb; width: 100px ; height: 50px;"><center><b><font color="white"><br>{{ trans('navbar.contact') }}</font></b></center></div></a></td>
                        <td></td>

                        <td><div style="background-color: #03387e; width: 40px ; height: 50px;"><center><img style="margin-top: 15px;" src="images/mexico-small.svg"></center></div></td><td><a class="small" href="{{ url('http://flottec.mx/') }}"><div style="background-color: #1966cb; width: 125px ; height: 50px;"><center><b><font color="white"><br>FLOTTEC MEXICO</font></b></center></div></a></td>
                        </tr></table>
                    </div>
                    <br>

                    <!-- <ul class="nav navbar-nav navbar-right">
                        <li><a class="small" href="{{ url('') }}"><b><font color="#1966cb">SEARCH</font></b></a></li> 
                    </ul>
                    <br><br> -->

                    <div style="margin-left: 45px;">
                    <table><tr>
                        <td><a class="small" href="{{ url('/home') }}"><div class="graybar"><center><b><font color="white"><br>{{ trans('navbar.home') }}</font></b></center></div></a></td>

                        <td><a class="small" href="{{ url('/products') }}"><div class="graybar"><center><b><font color="white"><br>{{ trans('navbar.products') }}</font></b></center></div></a></td>

                        <td><a class="small" href="{{ url('/research') }}"><div class="graybar"><center><b><font color="white"><br>{{ trans('navbar.research') }}</font></b></center></div></a></td>

                        <td><a class="small" href="{{ url('/sds') }}"><div class="graybar"><center><b><font color="white"><br>{{ trans('navbar.sds') }}</font></b></center></div></a></td>

                        <td><a class="small" href="{{ url('/global-network') }}"><div class="graybar"><center><b><font color="white"><br>{{ trans('navbar.global') }}</font></b></center></div></a></td>

                        <td><a class="small" href="{{ url('/company') }}"><div class="graybar"><center><b><font color="white"><br>{{ trans('navbar.company') }}</font></b></center></div></a></td>
                        
                        </tr></table>
                    </div>
                    <br>
                </div>
            </div>
        </nav>

@yield('content')

@section('footer')
@extends('layouts.foot')
@endsection
<br><br>
@yield('footer')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
