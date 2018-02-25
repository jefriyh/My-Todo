<!DOCTYPE html>
<html>
<head>
	<title>TODO | @yield('title')</title>
	<link rel="stylesheet" href="{{asset('materialize/css/materialize.min.css')}}">

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


</head>
<body>
	@section('navbar')
		@include('layouts.navbar')
	@show

	<div class="container">
		@yield('content')		
	</div>


	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

	<script src="{{asset('materialize/js/materialize.min.js')}}"></script>

	<script type="text/javascript">
		(function($){
			$(function(){
				$('.button-collapse').sideNav();
			});
		})(jQuery);
		
	</script>


</body>
</html>