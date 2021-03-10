<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Dashboard</title>

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
					<h1 class="text-light">Delicious</h1>
				</div>
			</div>

			<div class="profile">
				<img src="/img/perfil.jpg" alt="" class="img-fluid rounded-circle">
				<h1 class="text-light"><a href="index.html">Nombre Usuario</a></h1>

			</div>
	
			<nav id="navbar" class="nav-menu navbar">
				<ul>
					<li><a href="#Calendario" class="nav-link scrollto active"><i class="bi bi-calendar-event" style="color:white; font-size: 1.1rem;"></i> <span>Calendario</span></a></li>
					<li><a href="#Pedido" class="nav-link scrollto"><i class="bi bi-card-checklist" style="color:white; font-size: 1.1rem;"></i> <span>Pedidos</span></a></li>
					<li><a href="#Galeria" class="nav-link scrollto"><i class="bi bi-images" style="color:white; font-size: 1.1rem;"></i> <span>Galeria</span></a></li>
					<li><a href="#Promociones" class="nav-link scrollto"><i class="bi bi-cash-stack" style="color:white; font-size: 1.1rem;"></i> <span>Promociones</span></a></li>
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

		<!-- ======= Calendario ======= -->
		<section id="Calendario">
			<div class="container">
				<div class="section-title">
					<h2>Calendario</h2>
				</div>

				<div class="row">
						
					<div class="col-2">
						<div class="d-flex justify-content-center align-items-center">
							<h4 class="text-center text-wrap">Lunes</h4>
						</div>

						<div class="d-flex justify-content-center align-items-center">
							<div class="btn-group-vertical" role="group" aria-label="Basic checkbox toggle button group">
								<input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
								<label class="btn btn-outline-primary" for="btncheck1">Desayuno</label>
	
								<input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
								<label class="btn btn-outline-primary" for="btncheck2">Almuerzo</label>

								<input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
								<label class="btn btn-outline-primary" for="btncheck3">Cena</label>
							</div>
						</div>
					</div>
					
					<div class="col-2">
						<h4 class="text-center">Martes</h4>
						<div class="container">
							<div class="btn-group-vertical" role="group" aria-label="Basic checkbox toggle button group">
								<input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
								<label class="btn btn-outline-primary" for="btncheck4">Desayuno</label>
	
								<input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off">
								<label class="btn btn-outline-primary" for="btncheck5">Almuerzo</label>

								<input type="checkbox" class="btn-check" id="btncheck6" autocomplete="off">
								<label class="btn btn-outline-primary" for="btncheck6">Cena</label>
							</div>
						</div>
					</div>
					
					<div class="col-2">
						<h4 class="text-center">Miercoles</h4>
						<div class="container">
							<div class="btn-group-vertical" role="group" aria-label="Basic checkbox toggle button group">
								<input type="checkbox" class="btn-check" id="btncheck7" autocomplete="off">
								<label class="btn btn-outline-primary" for="btncheck7">Desayuno</label>
	
								<input type="checkbox" class="btn-check" id="btncheck8" autocomplete="off">
								<label class="btn btn-outline-primary" for="btncheck8">Almuerzo</label>

								<input type="checkbox" class="btn-check" id="btncheck9" autocomplete="off">
								<label class="btn btn-outline-primary" for="btncheck9">Cena</label>
							</div>
						</div>
					</div>
					
					<div class="col-2">
						<h4 class="text-center">Jueves</h4>
						<div class="container">
							<div class="btn-group-vertical" role="group" aria-label="Basic checkbox toggle button group">
								<input type="checkbox" class="btn-check" id="btncheck10" autocomplete="off">
								<label class="btn btn-outline-primary" for="btncheck10">Desayuno</label>
	
								<input type="checkbox" class="btn-check" id="btncheck11" autocomplete="off">
								<label class="btn btn-outline-primary" for="btncheck11">Almuerzo</label>

								<input type="checkbox" class="btn-check" id="btncheck12" autocomplete="off">
								<label class="btn btn-outline-primary" for="btncheck12">Cena</label>
							</div>
						</div>
					</div>
					
					<div class="col-2">
						<h4 class="text-center">Viernes</h4>
						<div class="container">
							<div class="btn-group-vertical" role="group" aria-label="Basic checkbox toggle button group">
								<input type="checkbox" class="btn-check" id="btncheck13" autocomplete="off">
								<label class="btn btn-outline-primary" for="btncheck13">Desayuno</label>
	
								<input type="checkbox" class="btn-check" id="btncheck14" autocomplete="off">
								<label class="btn btn-outline-primary" for="btncheck14">Almuerzo</label>

								<input type="checkbox" class="btn-check" id="btncheck15" autocomplete="off">
								<label class="btn btn-outline-primary" for="btncheck15">Cena</label>
							</div>
						</div>
					</div>
				
					<div class="col-2">
						<h4 class="text-center">Sabado</h4>
						<div class="container">
							<div class="btn-group-vertical" role="group" aria-label="Basic checkbox toggle button group">
								<input type="checkbox" class="btn-check" id="btncheck16" autocomplete="off">
								<label class="btn btn-outline-primary" for="btncheck16">Desayuno</label>
	
								<input type="checkbox" class="btn-check" id="btncheck17" autocomplete="off">
								<label class="btn btn-outline-primary" for="btncheck17">Almuerzo</label>

								<input type="checkbox" class="btn-check" id="btncheck18" autocomplete="off">
								<label class="btn btn-outline-primary" for="btncheck18">Cena</label>
							</div>
						</div>
					</div>
					
					<div class="col-2">
						<h4 class="text-center">Domingo</h4>
						<div class="container">
							<div class="btn-group-vertical" role="group" aria-label="Basic checkbox toggle button group">
								<input type="checkbox" class="btn-check" id="btncheck19" autocomplete="off">
								<label class="btn btn-outline-primary" for="btncheck19">Desayuno</label>
	
								<input type="checkbox" class="btn-check" id="btncheck20" autocomplete="off">
								<label class="btn btn-outline-primary" for="btncheck20">Almuerzo</label>

								<input type="checkbox" class="btn-check" id="btncheck21" autocomplete="off">
								<label class="btn btn-outline-primary" for="btncheck21">Cena</label>
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</section>
		<!-- ======= End Calendario ======= -->

		<!-- ======= Pedido ======= -->
		<section id="Pedido">
			<div class="container">
				<div class="section-title">
					<h2>Pedidos</h2>
				</div>

				<div class="position-relative m-4">
					<div class="progress" style="height: 1px;">
					  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
					<button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">2</button>
					<button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</button>
				</div>

			</div>

		</section>
		<!-- ======= End Pedido ======= -->

		<!-- ======= Galeria ======= -->
		<section id="Galeria" class="portfolio section-bg">
			<div class="container">
	
				<div class="section-title">
					<h2>Galeria</h2>
				</div>
		
				<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
		
					<div class="col-lg-4 col-md-6 portfolio-item filter-app">
					<div class="portfolio-wrap">
						<img src="/img/galeria/arroz-chaufa.jpg" class="img-fluid" alt="">
						<div class="portfolio-links">
						<a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
						<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>
					</div>
		
					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
					<div class="portfolio-wrap">
						<img src="/img/galeria/saltado.jpg" class="img-fluid" alt="">
						<div class="portfolio-links">
						<a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
						<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>
					</div>
		
					<div class="col-lg-4 col-md-6 portfolio-item filter-app">
					<div class="portfolio-wrap">
						<img src="/img/galeria/tallarin.jpg" class="img-fluid" alt="">
						<div class="portfolio-links">
						<a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
						<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>
					</div>
		
					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
					<div class="portfolio-wrap">
						<img src="/img/galeria/tallarin-rojo.jpg" class="img-fluid" alt="">
						<div class="portfolio-links">
						<a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
						<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>
					</div>
		
					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
					<div class="portfolio-wrap">
						<img src="/img/galeria/lomo-saltado.jpg" class="img-fluid" alt="">
						<div class="portfolio-links">
						<a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
						<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>
					</div>
		
					<div class="col-lg-4 col-md-6 portfolio-item filter-app">
					<div class="portfolio-wrap">
						<img src="/img/galeria/sopa-pollo.jpg" class="img-fluid" alt="">
						<div class="portfolio-links">
						<a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
						<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>
					</div>
		
					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
					<div class="portfolio-wrap">
						<img src="/img/galeria/huancaina.jpg" class="img-fluid" alt="">
						<div class="portfolio-links">
						<a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
						<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>
					</div>
		
					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
					<div class="portfolio-wrap">
						<img src="/img/galeria/causa.jpg" class="img-fluid" alt="">
						<div class="portfolio-links">
						<a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
						<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>
					</div>
		
					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
					<div class="portfolio-wrap">
						<img src="/img/galeria/milanesa.jpg" class="img-fluid" alt="">
						<div class="portfolio-links">
						<a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
						<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ======= End Galeria ======= -->

		<!-- ======= Promociones ======= -->
		<section id="Promociones" class="contact">
			<div class="container">
	  
			  	<div class="section-title">
					<h2>Promociones</h2>
			  	</div>
	  
				<div class="row" data-aos="fade-in">

					<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-indicators">
						  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
						  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
						</div>
						<div class="carousel-inner">
						  <div class="carousel-item active">
							<img src="/img/1.png" class="d-block w-100" alt="...">
						  </div>
						  <div class="carousel-item">
							<img src="/img/2.jpg" class="d-block w-100" alt="...">
						  </div>
						  <div class="carousel-item">
							<img src="/img/3.jpg" class="d-block w-100" alt="...">
						  </div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
						  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						  <span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
						  <span class="carousel-control-next-icon" aria-hidden="true"></span>
						  <span class="visually-hidden">Next</span>
						</button>
					  </div>

				</div>
			</div>
		</section><!-- End Promociones -->
	

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

</body>

</html>