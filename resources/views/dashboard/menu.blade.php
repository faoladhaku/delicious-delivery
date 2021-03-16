@extends('layout')
@section('title','Inicio')
@section('content')
<form action='/dashboard/newpedido' method="GET">
    @csrf
    Porfavor Seleccione la comida que desea para el dia Lunes
    <select name="lunesc" id="lunesc" class="form-control">
        @foreach($items as $item)
            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
        @endforeach
    </select>
    Porfavor Seleccione la bebida que desea para el dia Lunes
    <select name="lunesb" id="lunesb" class="form-control">
        @foreach($bebidas as $bebida)
            <option value="{{ $bebida->id }}">{{ $bebida->nombre }}</option>
        @endforeach
    </select>
    Porfavor Seleccione el postre que desea para el dia Lunes
    <select name="lunesp" id="lunesp" class="form-control">
        @foreach($postres as $postre)
            <option value="{{ $postre->id }}">{{ $postre->nombre }}</option>
        @endforeach
    </select>




    Porfavor Seleccione la comida que desea para el dia Martes
    <select name="martesc" id="martesc" class="form-control">
        @foreach($items as $item)
            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
        @endforeach
    </select>
    Porfavor Seleccione la bebida que desea para el dia Martes
    <select name="martesb" id="martesb" class="form-control">
        @foreach($bebidas as $bebida)
            <option value="{{ $bebida->id }}">{{ $bebida->nombre }}</option>
        @endforeach
    </select>
    Porfavor Seleccione el postre que desea para el dia Martes
    <select name="martesp" id="martesp" class="form-control">
        @foreach($postres as $postre)
            <option value="{{ $postre->id }}">{{ $postre->nombre }}</option>
        @endforeach
    </select>



    Porfavor Seleccione la comida que desea para el dia Miercoles
    <select name="miercolesc" id="miercolesc" class="form-control">
        @foreach($items as $item)
            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
        @endforeach
    </select>
    Porfavor Seleccione la bebida que desea para el dia Miercoles
    <select name="miercolesb" id="miercolesb" class="form-control">
        @foreach($bebidas as $bebida)
            <option value="{{ $bebida->id }}">{{ $bebida->nombre }}</option>
        @endforeach
    </select>
    Porfavor Seleccione el postre que desea para el dia Miercoles
    <select name="miercolesp" id="miercolesp" class="form-control">
        @foreach($postres as $postre)
            <option value="{{ $postre->id }}">{{ $postre->nombre }}</option>
        @endforeach
    </select>


    Porfavor Seleccione la comida que desea para el dia Jueves
    <select name="juevesc" id="juevesc" class="form-control">
        @foreach($items as $item)
            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
        @endforeach
    </select>
    Porfavor Seleccione la bebida que desea para el dia Jueves
    <select name="juevesb" id="juevesb" class="form-control">
        @foreach($bebidas as $bebida)
            <option value="{{ $bebida->id }}">{{ $bebida->nombre }}</option>
        @endforeach
    </select>
    Porfavor Seleccione el postre que desea para el dia Jueves
    <select name="juevesp" id="juevesp" class="form-control">
        @foreach($postres as $postre)
            <option value="{{ $postre->id }}">{{ $postre->nombre }}</option>
        @endforeach
    </select>


    Porfavor Seleccione la comida que desea para el dia Viernes
    <select name="viernesc" id="viernesc" class="form-control">
        @foreach($items as $item)
            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
        @endforeach
    </select>
    Porfavor Seleccione la bebida que desea para el dia Viernes
    <select name="viernesb" id="viernesb" class="form-control">
        @foreach($bebidas as $bebida)
            <option value="{{ $bebida->id }}">{{ $bebida->nombre }}</option>
        @endforeach
    </select>
    Porfavor Seleccione el postre que desea para el dia Viernes
    <select name="viernesp" id="viernesp" class="form-control">
        @foreach($postres as $postre)
            <option value="{{ $postre->id }}">{{ $postre->nombre }}</option>
        @endforeach
    </select>


    Porfavor Seleccione la comida que desea para el dia Sabado
    <select name="sabadoc" id="sabadoc" class="form-control">
        @foreach($items as $item)
            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
        @endforeach
    </select>
    Porfavor Seleccione la bebida que desea para el dia Sabado
    <select name="sabadob" id="sabadob" class="form-control">
        @foreach($bebidas as $bebida)
            <option value="{{ $bebida->id }}">{{ $bebida->nombre }}</option>
        @endforeach
    </select>
    Porfavor Seleccione el postre que desea para el dia Sabado
    <select name="sabadop" id="sabadop" class="form-control">
        @foreach($postres as $postre)
            <option value="{{ $postre->id }}">{{ $postre->nombre }}</option>
        @endforeach
    </select>


    Porfavor Seleccione la comida que desea para el dia Domingo
    <select name="domingoc" id="domingoc" class="form-control">
        @foreach($items as $item)
            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
        @endforeach
    </select>
    Porfavor Seleccione la bebida que desea para el dia Domingo
    <select name="domingob" id="domingob" class="form-control">
        @foreach($bebidas as $bebida)
            <option value="{{ $bebida->id }}">{{ $bebida->nombre }}</option>
        @endforeach
    </select>
    Porfavor Seleccione el postre que desea para el dia Domingo
    <select name="domingop" id="domingop" class="form-control">
        @foreach($postres as $postre)
            <option value="{{ $postre->id }}">{{ $postre->nombre }}</option>
        @endforeach
    </select>
    
    <input name="crearPedido" id="crearPedido"  class="btn btn-block login-btn mb-4" type="submit" value="Hacer pedido">
</form>
    
@endsection