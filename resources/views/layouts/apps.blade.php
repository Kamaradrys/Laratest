<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<body>
	<div class="container">
		<ul class="nav">
			<li class="nav-item"><a href="/" class="nav-link">Acceuil</a></li>
			<li class="nav-item"><a href="/a-propos" class="nav-link">A propos</a></li>
			<li class="nav-item"><a href="/contact" class="nav-link">Contactez-nous</a></li>
			<li class="nav-item"><a href="/clients" class="nav-link">Voir nos clients</a></li>
		</ul>
	</div>
<div class="container">
	@yield('content')
</div>
<!-- BOOTSTRAP::JS LINKS -->
<script src="{{ asset('bootstrap/js/jquery.min.js') }}"></script>	
<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>	
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>	
</body>
</html>