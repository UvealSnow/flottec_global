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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <script src="/js/app.js"></script>
    <link href="/css/styles.css" rel="stylesheet">


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div class="navigation">
        <div class="nav-first">  
            <a class="logo" href="{{ url('/') }}">
                <img src="images/flottec-logo.svg" alt="Flottec Global Logo">
            </a>        
            <div class="sessions">
                @if (Auth::guest()) 
                    <a class="" href="{{ url('/login') }}">Login</a>
                    <a class="" href="{{ url('/register') }}">{{ trans('navbar.register') }}</a>
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

            </div>
        </div>  
        <div class="nav-second">
            <a class="" href="{{ url('/contact-us') }}">
                <img src="images/contact.svg" alt="" class="icon">
                <span class="text">{{ trans('navbar.contact') }}</span>
            </a>
            <a href="http://flottec.mx">
                <img src="images/mexico.svg" alt="" class="icon">
                <span class="text">
                    Flottec Mexico
                </span>
            </a>
        </div>    
        <div class="nav-third">
            <a href="{ url('/') }">Home</a>
            <a class="" href="{{ url('/products') }}">{{ trans('navbar.products') }}</a>
            <a class="" href="{{ url('/research') }}">R&D</a>
            <a href="">SDS & MSDS</a>
            <a href="{{ url('/global-network') }}">Global Network</a>
            <a href="">Company</a>
        </div>  
    </div>


    <div id="app">
 
        <div class="interface">
            @yield('content')
        </div>     

    </div>

    <!-- Scripts -->
</body>
</html>
