<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $this->call(categoriaSeeder::class);
        $this->call(proveedorSeeder::class);
        $this->call(clienteSeeder::class);
        $this->call(productoSeeder::class);
        $this->call(telefonoClienteSeeder::class);
        $this->call(ventaSeeder::class);
    }
}
