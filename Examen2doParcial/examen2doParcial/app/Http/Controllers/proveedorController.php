<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proveedor;
use App\producto;

class proveedorController extends Controller
{
   
    public function index()
    {
        //
    }

    public function insert(Request $request)
    {
        proveedor::create($request->all());
        return 'se ha guardado';
    }

    public function update(Request $request, $id)
    {
        $proveedor = proveedor::findOrFail($id);
        $proveedor->nombre=$request->get('nombre');
        $proveedor->direccion=$request->get('direccion');
        $proveedor->telefono=$request->get('telefono');
        $proveedor->paginaWeb=$request->get('paginaWeb');
        $proveedor->update();
    }

    public function delete($id)
    {
        $proveedor = proveedor::findOrFail($id);
        $proveedor->delete();
    }

    public function show()
    {
        //
        $proveedor=proveedor::all();
        return response()->json($proveedor);
    }

    public function mostrarProductosDeManaco()
    {
        $productosDeManaco=producto::join('proveedors', 'proveedors.id', '=', 'productos.idProveedor') 
            ->where('proveedors.nombre', '=', 'Manaco')
            ->select('proveedors.nombre as Proveedor', 'productos.nombre as Productos proveidos')
            ->get();
        return $productosDeManaco;
    }

}
