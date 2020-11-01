@extends('header-footer')

@section('cuerpo')

<div class="section"></div>

<div class="container">
    <div>
        <h2>{{$actividad->nombre}}</h2>
        <a href="{{route('actividades')}}" class="right">Volver</a>
    </div>
    <h5>{{$actividad->descripcion}}</h5>
    <div class="divider"></div>
    <div class="section"></div>
    
</div>
    
<div class="section"></div>

@endsection