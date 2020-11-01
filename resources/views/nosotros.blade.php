@extends('header-footer')

@section('cuerpo')
<h1>hola</h1>

<h1>Este es mi equipo</h1>
@foreach($equipo as $item)
<a href="{{route('nosotros', $item)}}">{{$item}}</a>
@endforeach

@if (!empty($nombre))
<p>{{$nombre}}</p>
@endif

@endsection