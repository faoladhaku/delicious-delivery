@extends('layout')
@section('content')

<h1 class="text-center"> Pedidos Realizados</h1>

<div class="container">
    <div class="row">
        <div class = " col">
            <table class="table table-sm" style="margin: 0 auto;">
                <tr>
                    <th>#</th>
                    <th>Fecha de Inicio</th>
                    <th>Fecha Final</th>
                    <th>Costo</th>
                    <th></th>
                </tr>
            @foreach ($items as $item)
                <tr>
                    <td> </td>
                    <td>{{$item->Fecha_Inicio}}</td>
                    <td>{{$item->Fecha_Final}}</td>
                    <td>{{$item->costo}}</td>
                    <td><a class="btn btn-outline-secondary" href="{{ route('Pedido.id', [$item->id_pedidos_comida]) }}" >Ver</a></td>
                </tr>
            @endforeach       
        </div>
    </div>
</div>

@endsection