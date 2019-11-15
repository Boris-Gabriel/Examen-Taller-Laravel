<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente;

class clienteController extends Controller
{
    //
    public function listarClientesPorCiudad($ciudad)
    {
        $cliente = cliente::select('clientes.nombre as Cliente','clientes.ciudad as Ciudad')
                            ->where('clientes.ciudad', '=', $ciudad)
    	                    ->get();
    	return $cliente;
    }

    public function listarCantidadDeClientesPorCiudad($ciudad)
    {
        $clientes=cliente::selectRaw('clientes.ciudad as Ciudad, count(*) as Cantidad')
                        ->where('clientes.ciudad', '=', $ciudad)
                        ->groupBy('Ciudad')
                        ->get();

        return $clientes;
    }

    public function ciudadConMenosClientes()
    {
        $ciudadConMenosCliente=cliente::selectRaw('clientes.ciudad as Ciudad, count(clientes.nombre) as Cantidad')
                                        ->groupBy('Ciudad')
                                        //->min('Cantidad')
                                        ->get();

        return $ciudadConMenosCliente;
    }
}
