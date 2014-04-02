<!DOCTYPE html>
<html lang="sv">
	<head>
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Vi unga 4you</title>
	
	<link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet">
	<link href="{{ asset('css/style.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>
    <body>
    	@include('shared/banner')
    	@include('shared/menu')
        <div class="container">
            @yield('content')
        </div>

	<script src="{{ asset('js/jquery-1.11.0.js')}}"></script>
	<script src="{{ asset('js/bootstrap.js')}}"></script>
    </body>
</html>