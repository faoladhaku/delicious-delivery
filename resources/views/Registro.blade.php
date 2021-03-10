<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SingUp</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="/css/login.css">

</head>
<body>
	<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
		<div class="container">
		<div class="card login-card">
			<div class="row no-gutters">
			<div class="col-md-5">
				<img src="/img/inicio.jpg" alt="login" class="login-card-img">
			</div>
			<div class="col-md-7">
				<div class="card-body">

				<p class="login-card-description">Registro</p>
				
				<form action="/signup/new" method="POST">
					@csrf
					<div class="form-group mb-4">
						<label for="nombre" class="sr-only">Nombre</label>
						<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre y Apellido">
					</div>
					<div class="form-group">
						<label for="email" class="sr-only">Email</label>
						<input type="email" name="email" id="email" class="form-control" placeholder="Email">
					</div>
					<div class="form-group mb-4">
						<label for="password" class="sr-only">Password</label>
						<input type="password" name="password" id="password" class="form-control" placeholder="***********">
					</div>
					<input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Registro">
					</form>

		

					<div class="login_wrapper">

					<div class="row">
						<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6"> <a href="{{ url('login/facebook') }}" class="btn btn-primary facebook"> <span>Register with Facebook</span> <i class="fab fa-facebook"></i> </a> </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6"> <a href="{{ url('login/google') }}" class="btn btn-primary google-plus"> Register  with Google <i class="fab fa-google-plus"></i> </a> </div>
					</div>

				</div>
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