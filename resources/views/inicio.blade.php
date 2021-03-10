<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Delicius Delivery</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="/css/login.css">

</head>

<body>

  <!-- Page Content -->
  <!--
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="mt-5">Una nueva forma de comer</h1>
          <p>Es un sistema de servicio de elección por semana para delivery de comida semanal.
Se solicitará al contratar el servicio el cuestionario de qué postres y refrescos le gustan.
</p>
        </div>
      </div>
    </div>
  </section>
	-->

	<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
		<div class="container">
		<div class="card login-card">
			<div class="row no-gutters">
			<div class="col-md-5">
				<img src="/img/inicio.jpg" alt="login" class="login-card-img">
			</div>
			<div class="col-md-7">
				<div class="card-body">
				<div class="brand-wrapper">
					<img src="/img/logo.svg" alt="logo" class="logo">
				</div>
				<p class="login-card-description">Iniciar Sesion</p>
				<form action="#!">
					<div class="form-group">
						<label for="email" class="sr-only">Email</label>
						<input type="email" name="email" id="email" class="form-control" placeholder="Email">
					</div>
					<div class="form-group mb-4">
						<label for="password" class="sr-only">Password</label>
						<input type="password" name="password" id="password" class="form-control" placeholder="***********">
					</div>
					<input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
				
				</form>

				Iniciar Sesion con una red social
				<div class="login_wrapper">

					<div class="row">
						<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6"> <a href="{{ url('login/facebook') }}" class="btn btn-primary facebook"> <span>Login with Facebook</span> <i class="fab fa-facebook"></i> </a> </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6"> <a href="{{ url('login/google') }}" class="btn btn-primary google-plus"> Login with Google <i class="fab fa-google-plus"></i> </a> </div>
					</div>

				</div>

				<div class="form-group">
<!-- 
					<div class="col-md-6">
					Iniciar Sesion con una red social
						<a href="{{ url('login/facebook') }}" class="btn btn-social-icon btn-facebook"> <i class="fab fa-facebook"></i></a>
						<a href="{{ url('login/google') }}" class="btn btn-social-icon btn-google-plus"> <i class="fab fa-google-plus"></i></a>
			
					</div>
-->


				</div>
			
					<a href="#!" class="forgot-password-link">Olvidaste tu Password?</a>
					<p class="login-card-footer-text">No tienes cuenta? <a href="{{ url('/signup') }}" class="text-reset"> Registrate aqui</a></p>

				</div>
			</div>
			</div>
		</div>
	
		</div>
	</main>

  	<!-- Bootstrap core JavaScript -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
