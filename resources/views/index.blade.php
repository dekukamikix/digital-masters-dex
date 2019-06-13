<!DOCTYPE html>
<html>
<head>
	<title>Digimons - @yield('judul')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/index.css')}}">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="header" id="header">
		<div class="container">
			<p style="font-size: 25px">Digimon Masters - DigiDex</p>
			<p>@yield('judul')</p>
			<span style="cursor: pointer;" onclick="openNav()">&#9776;</span>
		</div>
	</div>
	<div class="sidenav" id="sidemenu">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="digimons">List</a>
		<a href="shardscalculations">Kalkulasi</a>
		<a href="about">Tentang</a>
	</div>

	<div id="main">
		@yield('content')
	</div>
	

	<footer class="footer mt-auto py-2">
		<div class="container">
			<span>footer</span>
		</div>
	</footer>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="{{asset('public/js/dropdownscript.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/js/sidemenu.js')}}"></script>
</body>
</html>
