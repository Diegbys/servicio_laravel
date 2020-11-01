@extends('header-footer')

@section('cuerpo')

<div class="section"></div>

<div class="container">
    <h1>Actividades</h1>
    <div class="divider"></div>
    <div class="section"></div>

    @if (session('mensaje'))
        <p class="blue-text">{{session('mensaje')}}</p>
    @endif

    <ul class="collection">
        @foreach ($actividades as $actividad)
        <li class="collection-item avatar">
                <i class="material-icons circle">play_arrow</i>
                <span class="title">
                    <a href="{{route('actividades.detalle', $actividad)}}">{{$actividad->nombre}}</a>
                </span>
                <p>{{$actividad->descripcion}} <br>
                   Saludos!
                </p>
                <div class="secondary-content valign-wrapper">
                    <a href="{{route('actividades.editar', $actividad)}}" class=""><i class="material-icons">create</i></a>
                    <form action="{{route('actividades.eliminar', $actividad)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" style="background: none; border: none"><i class="material-icons">delete</i></button>
                    </form>
                </div>
        </li>
        @endforeach
      </ul>
      {{$actividades->links()}}
      
      <div class="section"></div>
      <div class="divider"></div>
      <div class="section"></div>

      <div class="row">
            <form action="{{route('actividades.crear')}}" method="POST" class="col s12">
                 @csrf

                 @error('nombre')
                    <p>Se olvidó de colocar el título, es obligatorio</p>
                 @enderror
                 @error('descripcion')
                 <p>Se olvidó de colocar la descripción, es obligatorio</p>
                 @enderror
                <div class="row">
                <div class="input-field col s6">
                  <input  id="first_name" type="text" class="validate" name="nombre" value="{{old('nombre')}}">
                  <label for="first_name">Título:</label>
                </div>
                <div class="input-field col s6">
                  <input id="last_name" type="text" class="validate materialize-textarea" name="descripcion" value="{{old('descripcion')}}">
                  <label for="last_name">Descripción:</label>
                </div>
              </div>
              <div class="row center">
                  <button type="submit" class="btn blue">Agregar actividad</button>
                </div>
            </form>
          </div>

          

</div>



<div class="section"></div>

@endsection