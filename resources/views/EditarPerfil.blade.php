@extends('layout')
@section('content')

<h1>Edicion de perfil de {{$name->name}}</h1>
<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
		<div class="container">
			<div class="card login-card">
				<div class="row no-gutters">
					<div class="col-md-7">
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
								<button>Guardar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
@endsection