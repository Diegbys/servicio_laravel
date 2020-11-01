@extends('header-footer')

@section('cuerpo')

<div class="section"></div>

<div class="container">
    <h2>Editar la actividad</h2>
    <div class="divider"></div>
    <div class="section"></div>

    @if (session('mensaje'))
        <p class="blue-text">{{session('mensaje')}}</p>
    @endif

    <div class="row">
            <form action="{{route('actividades.actualizar', $actividad->id)}}" method="POST" class="col s12">
                @method('PUT') 
                @csrf

                 @error('nombre')
                    <p>Se olvidó de colocar el título, es obligatorio</p>
                 @enderror
                 @error('descripcion')
                 <p>Se olvidó de colocar la descripción, es obligatorio</p>
                 @enderror
                <div class="row">
                <div class="input-field col s6">
                  <input  id="first_name" type="text" class="validate" name="nombre" value="{{$actividad->nombre}}">
                  <label for="first_name">Título:</label>
                </div>
                <div class="input-field col s6">
                  <input id="last_name" type="text" class="validate materialize-textarea" name="descripcion" value="{{$actividad->descripcion}}">
                  <label for="last_name">Descripción:</label>
                </div>
              </div>
              <div class="row center">
                  <button type="submit" class="btn blue">Editar actividad</button>
                </div>
            </form>
          </div>

</div>
</div>


<div class="section"></div>

@endsection