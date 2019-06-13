<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('articulo')->insert([
               "nombre"   => 'basketball',
               "imagen" => 'img/zap-img/basketball.jpg',
               "id_tipo_articulo" =>1,
            ]);
        
        DB::table('articulo')->insert([
               "nombre"   => 'black',
               "imagen" => 'img/zap-img/black.jpg',
               "id_tipo_articulo" =>1,
            ]);
        
        DB::table('articulo')->insert([
               "nombre"   => 'nmd',
               "imagen" => 'img/zap-img/nmd.jpg',
               "id_tipo_articulo" =>1,
            ]);
        
        DB::table('articulo')->insert([
               "nombre"   => 'primeknit',
               "imagen" => 'img/zap-img/primeknit.jpg',
               "id_tipo_articulo" =>1,
            ]);
        
        DB::table('articulo')->insert([
               "nombre"   => 'clfnretro',
               "imagen" => 'img/rem-img/clfnretro.jpg',
               "id_tipo_articulo" =>2,
            ]);
        
        DB::table('articulo')->insert([
               "nombre"   => 'mandalacolors',
               "imagen" => 'img/rem-img/mandalacolors.jpg',
               "id_tipo_articulo" =>2,
            ]);
        
        DB::table('articulo')->insert([
               "nombre"   => 'militarshirt',
               "imagen" => 'img/rem-img/militarshirt.jpg',
               "id_tipo_articulo" =>2,
            ]);
        
        DB::table('articulo')->insert([
               "nombre"   => 'streetgraphic',
               "imagen" => 'img/rem-img/streetgraphic.jpg',
               "id_tipo_articulo" =>2,
            ]);
        
        DB::table('articulo')->insert([
               "nombre"   => 'bluejogger',
               "imagen" => 'img/pant-img/bluejogger.jpg',
               "id_tipo_articulo" =>3,
            ]);
        
        DB::table('articulo')->insert([
               "nombre"   => 'iconicjoggers',
               "imagen" => 'img/pant-img/iconicjoggers.jpg',
               "id_tipo_articulo" =>3,
            ]);
        
        DB::table('articulo')->insert([
               "nombre"   => 'originalstrefoil',
               "imagen" => 'img/pant-img/originalstrefoil.jpg',
               "id_tipo_articulo" =>3,
            ]);
        
        DB::table('articulo')->insert([
               "nombre"   => 'sportluxjogger',
               "imagen" => 'img/pant-img/sportluxjogger.jpg',
               "id_tipo_articulo" =>3,
            ]);
    }
}
