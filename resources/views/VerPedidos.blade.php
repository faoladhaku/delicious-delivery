@extends('layout')
@section('content')
<h1 class="text-center"> Lista de platos</h1>


<div class="container">
    <div class="row">
        <div class = " col">
            <table class="table table-striped" style="margin: 0 auto;">
                <tr>
                    <th>Lunes</th>
                    <th>Martes</th>
                    <th>Miercoles</th>
                    <th>Jueves</th>
                    <th>Viernes</th>
                    <th>Sabado</th>
                    <th>Domingo</th>
                    <th></th>
                </tr>


                <tr>
                    <td>Comidas : {{$_items['Lu']['Comida'][0]->nombre}}
                    <br>
                        Bebidas : {{$_items['Lu']['Bebida'][0]->nombre}}
                    <br>
                        Postres : {{$_items['Lu']['Comida'][0]->nombre}}
                    </td>

                    <td>Comidas : {{$_items['Ma']['Comida'][0]->nombre}}
                    <br>
                        Bebidas : {{$_items['Ma']['Bebida'][0]->nombre}}
                    <br>
                        Postres : {{$_items['Ma']['Comida'][0]->nombre}}
                    </td>

                    <td>Comidas : {{$_items['Mi']['Comida'][0]->nombre}}
                    <br>
                        Bebidas : {{$_items['Mi']['Bebida'][0]->nombre}}
                    <br>
                        Postres : {{$_items['Mi']['Comida'][0]->nombre}}
                    </td>

                    <td>Comidas : {{$_items['Ju']['Comida'][0]->nombre}}
                    <br>
                        Bebidas : {{$_items['Ju']['Bebida'][0]->nombre}}
                    <br>
                        Postres : {{$_items['Ju']['Comida'][0]->nombre}}
                    </td>

                    <td>Comidas : {{$_items['Vi']['Comida'][0]->nombre}}
                    <br>
                        Bebidas : {{$_items['Vi']['Bebida'][0]->nombre}}
                    <br>
                        Postres : {{$_items['Vi']['Comida'][0]->nombre}}
                    </td>

                    <td>Comidas : {{$_items['Sa']['Comida'][0]->nombre}}
                    <br>
                        Bebidas : {{$_items['Sa']['Bebida'][0]->nombre}}
                    <br>
                        Postres : {{$_items['Sa']['Comida'][0]->nombre}}
                    </td>

                    <td>Comidas :{{$_items['Do']['Comida'][0]->nombre}}
                    <br>
                        Bebidas :{{$_items['Do']['Bebida'][0]->nombre}}
                    <br>
                        Postres :{{$_items['Do']['Comida'][0]->nombre}}
                    </td>
                </tr>  
            </table> 
            <br>
            <center> 
             <td><a class="btn btn-outline-primary" href="/Pedidos" >Volver</a></td>
            </center>
          
        </div>
    </div>
</div>


@endsection