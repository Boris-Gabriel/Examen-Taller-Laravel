<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    //
    protected $fillable = [
        'id', 'nombre', 'precio', 'stock', 'idProveedor', 'idCategoria'
    ];

    public function producto(){
        return $this->morphTo();
    }

    public function venta(){
        return $this->hasMany('App\venta', 'idProducto');
    }
}
