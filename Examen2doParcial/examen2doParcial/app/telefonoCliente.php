<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class telefonoCliente extends Model
{
    //
    protected $fillable = [
        'id', 'telefono', 'idCliente'
    ];

    public function telefonoCliente(){
        return $this->morphTo();
    }
}
