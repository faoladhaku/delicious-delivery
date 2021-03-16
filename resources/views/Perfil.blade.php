@extends('layout')
@section('content')
<div class="col-md-auto">
    <h4 class="text-center"><strong>PERFIL</strong></h4>
    <hr>
    <div class="profile-card-4 text-center"><img src="https://aws.glamour.mx/prod/designs/v1/assets/3000x1575/225340.jpg" class="img img-responsive" style="max-width: 100%">
        <div class="profile-content">
            <div class="profile-name"><p>{{$name->name}}</p>
                <p>{{$name->email}}</p>
            </div>
            <p class="fw-lighter">Creaciòn de cuenta : {{$name->created_at}}</p>
            <div class="row">
                <div class="col-xs-4">
                    <form action="/editP" >
    					<button class="btn btn-primary">Editar</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
	</div>
</div>



@endsection