<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    //
    protected $fillable = [
        'id', 'nombre', 'direccion', 'telefono', 'paginaWeb'
    ];

    public function producto(){
        return $this->hasMany('App\producto', 'idProveedor');
    }
}
