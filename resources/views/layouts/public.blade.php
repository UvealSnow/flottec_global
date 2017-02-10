<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="description" content="Flottec Global">
		<meta name="keywords" content="Flottec Global">
		<meta name="author" content="Flottec">
		<meta name="robots" content="all" />
		<meta name="googlebot" content="all" />

		<title>{{ config('app.name', 'Laravel') }}</title>

		<!-- Styles -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
		<link href="/css/public.css" rel="stylesheet">
		<script src="/js/app.js"></script>

	</head>
	<body>

	    <div class="navigation">
	        <div class="nav-first">  
	            <a class="logo" href="{{ url('/') }}">
	                <img src="/images/flottec-logo.svg" alt="Flottec Global Logo">
	            </a>        
	            <div class="sessions">
	            	@if (Auth::guest())
	                	<a class="" href="{{ url('/login') }}">Login</a>
	                	<a class="" href="{{ url('/register') }}">Register</a>
	                @else
	                	<a href="{{ route('logout') }}"
	                	    onclick="event.preventDefault();
	                	             document.getElementById('logout-form').submit();">
	                	    LOGOUT
	                	</a>

	                	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                	    {{ csrf_field() }}
	                	</form>
	                @endif
	            </div>
	        </div>  
	        <div class="nav-second">
	            <a class="" href="{{ url('/contact-us') }}">
	                <img src="/images/contact.svg" alt="" class="icon">
	                <span class="text">Contact</span>
	            </a>
	            <a href="http://flottec.mx">
	                <img src="/images/mexico.svg" alt="" class="icon">
	                <span class="text">
	                    Flottec Mexico
	                </span>
	            </a>
	        </div>    
	        <div class="nav-third">
	            <a href="{{ url('/') }}">Home</a>
	            <a href="{{ url('products') }}">Products</a>
	            <a href="{{ url('research') }}">R&D</a>
	            <a href="{{ url('product-sheets') }}">SDS & MSDS</a>
	            <a href="{{ url('global-network') }}">Global Network</a>
	            <a href="{{ url("company") }}">Company</a>
	        </div>  
	    </div>

	    <div id="app">
	 
	        <div class="interface">

	        	<br>
	        	
		        @yield('content')

	        </div>
	   </div>

		<footer>
	    	<div class="partners-container">
	    		<h1>Partners</h1>
	    		<a href=""><img src="/images/flottec-logo-white.svg" alt=""></a>
	    		<a href=""><img src="/images/flottec-logo-white.svg" alt=""></a>
	    		<a href=""><img src="/images/flottec-logo-white.svg" alt=""></a>
	    		<a href=""><img src="/images/flottec-logo-white.svg" alt=""></a>
	    		<a href=""><img src="/images/flottec-logo-white.svg" alt=""></a>
	    		<a href=""><img src="/images/flottec-logo-white.svg" alt=""></a>
	    	</div>
	    	<div class="sitemap">
	    		<h1>Sitemap</h1>
	    		<hr>
	    		<div class="link-container">
	    			<a href="{{ url("global-network") }}">Global Network</a>
	    			<a href="{{ url("/") }}">Home</a>
	    			<a href="{{ url("company") }}">Company</a>
	    			<a href="{{ url("products") }}">Products</a>
	    			<a href="{{ url("research") }}">R&D</a>
	    			<a href="http://flottec.mx">Flottec Mexico</a>
	    			<a href="{{ url("contact") }}">Contact</a>
	    			<a href="{{ url("product-sheets") }}">SDS/MSDS</a>
	    			<a href="{{ url("privacy") }}">Privacy Policy</a>
	    			<a href="{{ url("disclaimer") }}">Disclaimer</a>
	    		</div>
	    	</div>
	    </footer>

	</body>
</html>