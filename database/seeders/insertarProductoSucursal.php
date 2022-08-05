<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class insertarProductoSucursal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('categorias')->insert(array(
            [
               'nombre' => 'Poleras' 
            ],
            [
               'nombre' => 'Polerón' 
            ],
            [
               'nombre' => 'Pantalón'
            ]  ));
               
                 
                 $this->command->info("Producto insertado en sucursal");

    }
}
