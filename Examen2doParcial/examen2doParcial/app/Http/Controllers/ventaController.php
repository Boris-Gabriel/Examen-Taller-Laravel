<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente;
use App\venta;
use App\producto;

class ventaController extends Controller
{
    //
    public function mostrarProductosPorCliente($cliente)
    {
        $productosComprados=venta::join('clientes', 'clientes.id', '=', 'ventas.idCliente')
                            ->join('productos', 'productos.id', '=', 'ventas.idProducto')
                            ->where('clientes.nombre', '=', $cliente)
                            ->select('clientes.nombre as Cliente','productos.nombre as Productos Comprados')
                            ->get();
        return $productosComprados;
    }

    public function mostrarProductosMasVendidos()
    {
        $productosMasVendidos=venta::selectRaw('productos.nombre as Producto, sum(ventas.cantidad) as Venta')
                                ->join('productos', 'productos.id', '=', 'ventas.idProducto')
                                ->groupBy('Producto')
                                ->orderBy('Venta', 'desc')
                                ->get();
        return $productosMasVendidos;
    }
}