<?php

use Illuminate\Database\Seeder;

class telefonoClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('telefono_clientes')->insert(['telefono'=>'69805781','idCliente'=>'1']);
        DB::table('telefono_clientes')->insert(['telefono'=>'72040118','idCliente'=>'1']);
        DB::table('telefono_clientes')->insert(['telefono'=>'77502646','idCliente'=>'1']);
        DB::table('telefono_clientes')->insert(['telefono'=>'72040113','idCliente'=>'6']);
        DB::table('telefono_clientes')->insert(['telefono'=>'75022332','idCliente'=>'6']);
        DB::table('telefono_clientes')->insert(['telefono'=>'75546123','idCliente'=>'3']);
        DB::table('telefono_clientes')->insert(['telefono'=>'65525120','idCliente'=>'3']);
        DB::table('telefono_clientes')->insert(['telefono'=>'75588997','idCliente'=>'4']);
        DB::table('telefono_clientes')->insert(['telefono'=>'74040000','idCliente'=>'9']);
        DB::table('telefono_clientes')->insert(['telefono'=>'70641948','idCliente'=>'10']);
    }
}
