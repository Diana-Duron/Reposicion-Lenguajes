<?php

namespace App\Http\Controllers;
use App\Models\Empleado;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    //

    public function obtener(){
        $empleados = Empleado::all();
        return view('empleados', compact('empleados'));
    }

    public function crear(){
        return view('crearEmpleado');
    }

    public function guardar(Request $request){
        $empleado= new Empleado();
        $empleado->nombre = $request->input("nombre");
        $empleado->apellido = $request->input("apellido");
        $empleado->fechaRegistro = $request->input("fechaRegistro");
        $empleado->salario = $request->input("salario");
        $empleado->save();
        
        return redirect('');
    }
}
