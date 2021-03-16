@extends('layout')
@section('content')
<h1>Pedidos Realizados </h1>

<h2>Usuario : {{$name->name}}</h2>

<table class="">
    <tr>
        <th>Fecha de Inicio</th>
        <th>Fecha Final</th>
        <th>Costo</th>
        <th></th>
    </tr>
@foreach ($items as $item)
    <tr>
        <td>{{$item->Fecha_Inicio}}</td>
        <td>{{$item->Fecha_Final}}</td>
        <td>{{$item->costo}}</td>
        <td><a class="btn btn-outline-secondary" href="#" >Ver</a></td>
    </tr>

    
    
@endforeach

@endsection