<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categoria;
use App\producto;

class productoController extends Controller
{
    public function index()
    {
        //
    }
/////////////completar///////////////
    public function mostrarProductosPorCategoria($categoria)
    {
        $productos=producto::join('categorias', 'categorias.id', '=', 'productos.idCategoria')
                            ->where('categorias.categoria', '=', $categoria)
                            ->get();
        return $productos;
    }

    public function mostrarProductoEnStock()
    {
        $listaProductos=producto::selectRaw('productos.nombre as Producto, productos.stock as Stock')
                                ->where('productos.stock', '>', '0')
                                ->orderBy('Producto', 'asc')
                                ->get();

        return $listaProductos;
    }

    
}
