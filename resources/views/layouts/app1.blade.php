<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/w3.css') }}" rel="stylesheet">
	<style>
		body {
		  margin: 0;
		  font-family: Arial, Helvetica, sans-serif;
		}

		.topnav {
		  overflow: hidden;
		  background-color: #87CEFA;
		}

		.topnav a {
			float: left;
			color: #0f0f0f;
			text-align: center;
			padding: 20px 30px;
			text-decoration: none;
			font-size: 20px;
		}
		
	

		.topnav a:hover {
		  background-color: #ddd;
		  color: black;
		}

		.topnav a.active {
		  background-color: #4CAF50;
		  color: white;
		}
		.container {
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 20px;
		}
		
		.material-icons {vertical-align:-14%}

		.welcome{
			float : right;
			color : white;
			text-align:center;
			padding:14px 16px;
			text-decoration:none;
			font-size:17px;
		}
		</style>
</head>
<body>
    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"> --}}
            <div class="topnav">
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> --}}
                {{-- go to home --}}
				<a href="{{ url('/')}}"><i class="fa fa-male">&nbsp; SFAS</i></a>	
                {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}
            </div>
        </nav>

        {{-- <main class="py-4">
            @yield('content')
        </main> --}}
    </div>
</body>
</html>
{{-- @include ('layout.footer') --}}
