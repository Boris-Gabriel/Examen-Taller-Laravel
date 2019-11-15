<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    //
    protected $fillable = [
        'id', 'categoria', 'descripcion'
    ];

    public function producto(){
        return $this->hasMany('App\producto', 'idCategoria');
    }
}
