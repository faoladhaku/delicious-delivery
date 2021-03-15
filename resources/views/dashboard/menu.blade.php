@extends('layout')
@section('title','Inicio')
@section('content')
Porfavor Seleccione la comida que desea para el dia Lunes
<select name="comidas" id="comidas" class="form-control">
</select>

{{$items}}

@endsection