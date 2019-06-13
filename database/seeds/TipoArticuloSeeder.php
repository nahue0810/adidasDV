<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_articulo')->insert([
               "nombre"   => 'Calzado',
            ]);
        
        DB::table('tipo_articulo')->insert([
               "nombre"   => 'Remera',
            ]);
        
        DB::table('tipo_articulo')->insert([
               "nombre"   => 'Pantalon',
            ]);
    }
}
