<?php

namespace App\Http\Controllers;
use App\Models\Proveedor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    //
    public function obtener(){
        $proveedores = Proveedor::all();
        return view('proveedores', compact('proveedores'));
    }

    public function crear(){
        return view('crearProveedor');
    }

    public function guardar(Request $request){
        $proveedor= new Proveedor();
        $proveedor->nombre = $request->input("nombre");
        $proveedor->fechaRegistro = $request->input("fechaRegistro");
        $proveedor->telefono = $request->input("telefono");
        $proveedor->correo = $request->input("correo");
        $proveedor->save();
        
        return redirect('');
    }
}
