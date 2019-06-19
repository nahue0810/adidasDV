<?php

namespace adidasDV\Http\Controllers;

use adidasDV\Modelos\TipoArticulo;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view("web.index");
    }


    public function contacto(){
        return view("web.contacto");

    }
    
    public function sucursales(){
        return view("web.sucursales");

    }

    public function articulos(TipoArticulo $tipoArticulo){
        
        $tipoArticulos = $tipoArticulo->with("articulo")->get();

        return view('web.articulos',compact('tipoArticulos'));
    }
}
