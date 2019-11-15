<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    //
    protected $fillable = [
        'id', 'nombre', 'calle', 'numero', 'comuna', 'ciudad'
    ];

    public function telefonoCliente(){
        return $this->hasMany('App\telefonoCliente', 'idCliente');
    }

    public function venta(){
        return $this->hasMany('App\venta', 'idCliente');
    }
}
