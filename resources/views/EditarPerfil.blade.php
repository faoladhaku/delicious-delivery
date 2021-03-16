@extends('layout')
@section('content')




<main class="d-flex align-items-center min-vh-100 py-3 py-md-0" style="background-image: url(https://image.freepik.com/foto-gratis/elegante-servicio-mesa-restaurante-recepcion-tarjeta-reservada_53876-55069.jpg);background-repeat: no-repeat; background-size: 100%">
<div class="container" >
	<div class="row" style="background: rgba(0,0,0,0.3); opacity: 0.6; border-radius: 5px">
		<h1 style="color: white; font-family: Lucida Handwriting ""> <p class="fw-bold text-center">Editar Perfil {{$name->name}} </p></h1>
	</div>
	
	<div class="row justify-content-md-center" >
			<div class="col-md-5  " >  
				<div class="card">
					<dir class="card-body">
						<form>
							  <div class="mb-3">
							    <label for="exampleInputEmail1" class="form-label">Datos Personales</label>
							    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$name->name}}">
							    <div id="emailHelp" class="form-text">Puedes cambiar tus datos personales</div>
							  </div>
							  <div class="mb-3">
							    <label for="exampleInputPassword1" class="form-label">Correo Electrònico</label>
							    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="{{$name->email}}">
							  </div>
							  <button type="submit" class="btn btn-primary">Guardar</button>
						</form>
					</dir>
					
				</div>
			</div>
			
	</div>
</div>
<!--
		<div class="container">
			<div class="card login-card">
				<div class="row no-gutters">
					<div class="col-md-5">
						<div class="card-body">
							<form action="/editProfile" method="POST">
								@csrf
								<div class="form-group mb-4">
									<label for="nombre" class="sr-only">Nombre</label>
									<input type="text" name="nombre" id="nombre" class="form-control" placeholder="{{$name->name}}">
								</div>
								<div class="form-group">
									<label for="email" class="sr-only">Email</label>
									<input type="email" name="email" id="email" class="form-control" placeholder="{{$name->email}}">
								</div>
                                <br>
								<button class="btn btn-primary">Guardar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>-->
@endsection