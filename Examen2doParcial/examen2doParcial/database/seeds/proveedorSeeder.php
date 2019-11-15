<?php

use Illuminate\Database\Seeder;

class proveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('proveedors')->insert(['nombre'=>'Alel Ibanez','direccion'=>'calle 1','telefono'=>'69805781','paginaWeb'=>'alan@gmail.com']);
        DB::table('proveedors')->insert(['nombre'=>'Andres Mendoza','direccion'=>'las lomas','telefono'=>'67524123','paginaWeb'=>'andres@gmail.com']);
        DB::table('proveedors')->insert(['nombre'=>'Eduardo Mendoza','direccion'=>'las lomas','telefono'=>'72566985','paginaWeb'=>'edu@gmail.com']);
        DB::table('proveedors')->insert(['nombre'=>'Bladimir Ibanez','direccion'=>'lucrecia sausoles','telefono'=>'65423541','paginaWeb'=>'bladi@gmail.com']);
        DB::table('proveedors')->insert(['nombre'=>'Guillermo Ibanez','direccion'=>'cotahuma','telefono'=>'72040119','paginaWeb'=>'guillermo@gmail.com']);
        DB::table('proveedors')->insert(['nombre'=>'Jhosi Ramos','direccion'=>'calle 2','telefono'=>'77502646','paginaWeb'=>'jhosi@gmail.com']);
        DB::table('proveedors')->insert(['nombre'=>'Virginia Calderon','direccion'=>'huallparimachi','telefono'=>'70125058','paginaWeb'=>'virginia@gmail.com']);
        DB::table('proveedors')->insert(['nombre'=>'Joel Mamani','direccion'=>'cristo redentor','telefono'=>'68522331','paginaWeb'=>'joel@gmail.com']);
        DB::table('proveedors')->insert(['nombre'=>'Jose Mendoza','direccion'=>'licenciada','telefono'=>'67501233','paginaWeb'=>'snorlax@gmail.com']);
        DB::table('proveedors')->insert(['nombre'=>'Carlos Ojeda','direccion'=>'panama','telefono'=>'69755224','paginaWeb'=>'carlos@gmail.com']);
    }
}
