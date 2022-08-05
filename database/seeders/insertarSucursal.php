<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class insertarSucursal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('sucursales')->insert(array(
         [
         'nombre'=>'Casa Matriz',
         'direccion'=>'Alonso de Cordoba 8991 - Las Condes'
         ],
         [
         'nombre'=>'Maipu',
         'direccion'=>'AV. Pajaritos 7659 - Maipu'
         ],
         [
         'nombre'=>'La Serena',
         'direccion'=>'Los husares de la muerte 158'
         ]
         ));
        
          
          $this->command->info("Sucursal insertada");
    }
}