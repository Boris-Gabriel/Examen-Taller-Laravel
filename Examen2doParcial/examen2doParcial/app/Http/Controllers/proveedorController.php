<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proveedor;

class proveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     

     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
