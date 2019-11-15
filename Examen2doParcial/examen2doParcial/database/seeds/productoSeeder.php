<?php

use Illuminate\Database\Seeder;

class productoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('productos')->insert(['nombre'=>'Leche','precio'=>'6','stock'=>'10','idCategoria'=>'1','idProveedor'=>'1']);
        DB::table('productos')->insert(['nombre'=>'Yogur','precio'=>'8','stock'=>'12','idCategoria'=>'1','idProveedor'=>'1']);
        DB::table('productos')->insert(['nombre'=>'Atun','precio'=>'4','stock'=>'15','idCategoria'=>'2','idProveedor'=>'10']);
        DB::table('productos')->insert(['nombre'=>'Sardina','precio'=>'6','stock'=>'20','idCategoria'=>'2','idProveedor'=>'10']);
        DB::table('productos')->insert(['nombre'=>'auto','precio'=>'20','stock'=>'7','idCategoria'=>'3','idProveedor'=>'2']);
        DB::table('productos')->insert(['nombre'=>'muneco','precio'=>'10','stock'=>'12','idCategoria'=>'3','idProveedor'=>'2']);
        DB::table('productos')->insert(['nombre'=>'babero','precio'=>'18','stock'=>'8','idCategoria'=>'4','idProveedor'=>'6']);
        DB::table('productos')->insert(['nombre'=>'sonajera','precio'=>'20','stock'=>'8','idCategoria'=>'4','idProveedor'=>'6']);
        DB::table('productos')->insert(['nombre'=>'fernet','precio'=>'70','stock'=>'20','idCategoria'=>'9','idProveedor'=>'9']);
        DB::table('productos')->insert(['nombre'=>'ron W','precio'=>'70','stock'=>'20','idCategoria'=>'9','idProveedor'=>'9']);
    }
}
