<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    //
    protected $fillable = [
        'id', 'fecha', 'descuento', 'montoFinal', 'cantidad', 'idCliente', 'idProducto'
    ];

    public function venta(){
        return $this->morphTo();
    }
}
