<?php

use Illuminate\Database\Seeder;

class categoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categorias')->insert(['categoria'=>'Lacteos','descripcion'=>'derivados de la leche']);
        DB::table('categorias')->insert(['categoria'=>'Enlatados','descripcion'=>'productos enlatados']);
        DB::table('categorias')->insert(['categoria'=>'Juguetes','descripcion'=>'juguetes']);
        DB::table('categorias')->insert(['categoria'=>'Bebes','descripcion'=>'productos de bebes']);
        DB::table('categorias')->insert(['categoria'=>'Carnes','descripcion'=>'tipos de carne']);
        DB::table('categorias')->insert(['categoria'=>'Bebidas','descripcion'=>'bebidas analcoholicas']);
        DB::table('categorias')->insert(['categoria'=>'Golosinas','descripcion'=>'todas las golosinas']);
        DB::table('categorias')->insert(['categoria'=>'Verduras','descripcion'=>'verduras frescas']);
        DB::table('categorias')->insert(['categoria'=>'BebidasAlcoholicas','descripcion'=>'bebidas con alcohol']);
        DB::table('categorias')->insert(['categoria'=>'Salados','descripcion'=>'productos salados']);
    }
}
