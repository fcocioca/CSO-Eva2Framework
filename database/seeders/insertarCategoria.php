<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class insertarCategoria extends Seeder
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
            'nombre' => 'Alimentos' 
         ],
         [
            'nombre' => 'Higiene' 
         ] ));
               
                 
                 $this->command->info("Categoría insertada");
           }
    
}
