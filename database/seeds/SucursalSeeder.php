<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursal')->insert([
               "nombre"   => 'almagro',
               "imagen" => 'img/sucursales/almagro/almagro.jpg',
               "descripcion" =>'img/sucursales/almagro/descripcion.txt' ,
            ]);
        
        DB::table('sucursal')->insert([
               "nombre"   => 'avellaneda',
               "imagen" => 'img/sucursales/avellaneda/avellaneda.jpg',
               "descripcion" =>'img/sucursales/avellaneda/descripcion.txt' ,
            ]);
        
        DB::table('sucursal')->insert([
               "nombre"   => 'caballito',
               "imagen" => 'img/sucursales/caballito/caballito.jpg',
               "descripcion" =>'img/sucursales/caballito/descripcion.txt' ,
            ]);
        
        DB::table('sucursal')->insert([
               "nombre"   => 'flores',
               "imagen" => 'img/sucursales/flores/flores.jpg',
               "descripcion" =>'img/sucursales/flores/descripcion.txt' ,
            ]);
        
        DB::table('sucursal')->insert([
               "nombre"   => 'palermo',
               "imagen" => 'img/sucursales/palermo/palermo.jpg',
               "descripcion" =>'img/sucursales/palermo/descripcion.txt' ,
            ]);
        
        DB::table('sucursal')->insert([
               "nombre"   => 'recoleta',
               "imagen" => 'img/sucursales/recoleta/recoleta.jpg',
               "descripcion" =>'img/sucursales/recoleta/descripcion.txt' ,
            ]);
    }
}
