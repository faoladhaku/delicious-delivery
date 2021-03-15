@extends('layout')
@section('content')
<h1>Perfil </h1>
<p>Nombre del usuario :  {{$name->name}}</p>
<p>Correo electronico : {{$name->email}}</p>
<p>Fecha de inscripcion : {{$name->created_at}}</p>
<form action="/editP" >
    <button>Editar</button>
</form>
@endsection