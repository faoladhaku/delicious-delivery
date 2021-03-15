@extends('layout')
@section('title','Inicio')
@section('content')
Porfavor Seleccione la comida que desea para el dia Lunes
<select name="comidas" id="comidas" class="form-control">
    @foreach($item as $item)
    <option value="{{ $item->id }}">{{ $item->name }}</option>
    @endforeach
</select>
@endsection