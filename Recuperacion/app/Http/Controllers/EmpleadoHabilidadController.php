<?php

namespace App\Http\Controllers;
use App\Models\Empleado;
use App\Models\Habilidad;
use App\Models\Empleado_habilidad;
use Illuminate\Http\Request;

class EmpleadoHabilidadController extends Controller
{
    public function asociar(){

        $empleados = Empleado::all();
        $habilidads = Habilidad::all();
       
        return view('empleado_habilidad.asociar',compact('empleados','habilidads'));

    }

    public function store(Request $request){

        $empleado=Empleado::find($request->empleado_id);
        $empleado->habilidads()->attach($request->habilidad_id);

    }
}
