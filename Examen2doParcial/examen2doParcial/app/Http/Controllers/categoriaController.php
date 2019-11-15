<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\venta;
use App\categoria;

class categoriaController extends Controller
{
    //
    public function mostrarCategoriasMasVendidasPorProducto()
    {
        $categorias=venta::join('productos', 'productos.id', '=', 'ventas.idProducto')
                        ->join('categorias', 'categorias.id', '=', 'productos.idCategoria')
                        ->selectRaw('categorias.categoria as Categoria, SUM(ventas.cantidad) as Ventas')
                        ->groupBy('Categoria')
                        ->orderBy('Ventas', 'desc')
                        ->get();
        return $categorias;
    }
}
