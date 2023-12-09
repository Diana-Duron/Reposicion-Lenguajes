<?php

namespace App\Http\Controllers;
use App\Models\Producto;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function obtener(){
        $productos = Producto::all();
        return view('productos', compact('productos'));
    }

    public function crear(){
        return view('crearProducto');
    }

    public function guardar(Request $request){
        $producto= new Producto();
        $producto->descripcion = $request->input("descripcion");
        $producto->precio = $request->input("precio");
        $producto->stock = $request->input("stock");
        $producto->pagaisv = $request->input("pagaisv");
        $producto->save();
        
        return redirect('');
    }
}
