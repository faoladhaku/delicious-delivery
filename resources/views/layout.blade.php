<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Delicious Deliver - @yield('title')</title>

	<link href="assets/img/favicon.png" rel="icon">
  	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
	  
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">

	<!--== Bootstrap 5.0 ==-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<!--== Iconos ==-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

	<!--== Estilos ==-->
	<link rel="stylesheet" href="/css/style.css">

</head>
<body>

	<header id="header">
	<!--
	<nav class="navbar navbar-light bg-light justify-content-between">
		<a class="navbar-brand">Delicius</a>
		
		<form class="form-inline my-2 my-lg-0">
			<a class="navbar-brand" href="#">Nombre del Usuario</a>
			<button class="btn btn-sm btn-primary" type="submit">Perfil</button>

			<button class="btn btn-sm btn-outline-secondary" type="submit">Sign Out</button>
		</form>
	</nav>
	-->

		<div class="d-flex flex-column">

			<div class="container w-100 p-3">
				<div class="row justify-content-md-center">
					<h1 class="text-light">Delicious Delivery</h1>
				</div>
			</div>

			<div class="profile">
				<img src="/img/perfil.jpg" alt="" class="img-fluid rounded-circle">
				<h1 class="text-light">Bienvenido {{$name}}</h1>

			</div>
	
			<nav id="navbar" class="nav-menu navbar">
				<ul>
                    <li><a href="/dashboard" class="nav-link scrollto active"><i class="bi bi-house-fill" style="color:white; font-size: 1.1rem;"></i> <span>Inicio</span></a></li>
					<li><a href="/menu" class="nav-link scrollto"><i class="bi bi-calendar-event" style="color:white; font-size: 1.1rem;"></i> <span>Menú</span></a></li>
					<li><a href="#" class="nav-link scrollto"><i class="bi bi-card-checklist" style="color:white; font-size: 1.1rem;"></i> <span>Pedidos</span></a></li>
					<!-- <li><a href="#" class="nav-link scrollto"><i class="bi bi-images" style="color:white; font-size: 1.1rem;"></i> <span>Galeria</span></a></li> -->
					<li><a href="#" class="nav-link scrollto"><i class="bi bi-cash-stack" style="color:white; font-size: 1.1rem;"></i> <span>Promociones</span></a></li>
					<li><a href="/logout" id=logout><i class="bi bi-door-closed-fill" style="color:white; font-size: 1.1rem;"></i> <span>Logout</span></a></li>
				</ul>
			</nav>

			<div>
				<div>
					<li><a href="#" class="nav-link scrollto" style="color:white;"><i class="bi bi-box-arrow-left" style="color:white; font-size: 1.1rem;"></i> <span>Salir</span></a></li>
				</div>
			</div>

		</div>

	</header>
	<main id="main">

		@yield('content')
	

	</main>

	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col"></div>
				<div class="col" >
					<a href="#" class="twitter"><i class="bi bi-whatsapp" style="font-size: 1.2rem;"></i></a>
				</div>
				<div class="col">
					<a href="#" class="facebook"><i class="bi bi-facebook" style="font-size: 1.2rem;"></i></a>
				</div>
				<div class="col">
					<a href="#" class="instagram"><i class="bi bi-instagram" style="font-size: 1.2rem;"></i></a>
				</div>
				<div class="col">
					<a href="#" class="instagram"><i class="bi bi-youtube" style="font-size: 1.2rem;"></i></a>
				</div>
				<div class="col"></div>
			</div>

		  <div class="copyright">
			<span>Contacto</span><strong><span> Delicious Delivery</span></strong>
		  </div>

		</div>
	  </footer><!-- End  Footer -->

  	<!-- Bootstrap core JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

	<script src="/js/inicio.js"></script>
</body>

</html>