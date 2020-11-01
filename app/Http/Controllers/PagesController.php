<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function inicio()
    {
        return view('index');
    }

    public function posts()
    {
        return view('posts');
    }

    public function nosotros($nombre = null)
    {
        $equipo = ['Diegbys', 'Mauricio', 'Prof.SUjey'];

        //return view('nosotros', ['equipo' => $equipo]);
        return view('nosotros', compact('equipo', 'nombre'));
    }

    public function actividades()
    {
        $actividades = App\Actividad::paginate(4);

        return view('actividades', compact('actividades'));
    }

    public function detalle($id)
    {
        $actividad = App\Actividad::findOrFail($id);

        return view('actividades.detalle', compact('actividad'));
    }

    public function crear(Request $request)
    {
        //return $request->all();

        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);
        
        $actividadNueva = new App\Actividad;
        $actividadNueva->nombre = $request->nombre;
        $actividadNueva->descripcion = $request->descripcion;

        $actividadNueva->save();

        return back()->with('mensaje', 'Su actividad se ha agregado correctamente');
    }

    public function editar($id){
        $actividad = App\Actividad::findOrFail($id);
        return view('actividades.editar', compact('actividad'));
    }

    public function actualizar(Request $request, $id){
        $actividadActualizar = App\Actividad::findOrFail($id);
        $actividadActualizar->nombre = $request->nombre;
        $actividadActualizar->descripcion = $request->descripcion;
        $actividadActualizar->save();

        return back()->with('mensaje', 'Actividad Actuaizada');
    }

    public function eliminar($id){
        $actividadEliminar = App\Actividad::findOrFail($id);
        $actividadEliminar->delete();

        return back()->with('mensaje', 'Actividad Eliminada');
    }
}
