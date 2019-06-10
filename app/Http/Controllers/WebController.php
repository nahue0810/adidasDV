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

    public function articulos(TipoArticulo $tipoArticulo){
        /*
         Cuando me traigo todo un modelo, tengo una forma de pedirle que me traiga tambien sus relaciones (si las voy a usar, es lo más optimo)

        Con el método ->with("relaciones") del modelo ->get()
         */
        $tipoArticulo = $tipoArticulo->with("articulo")->get();

        //dd($tipoHabitaciones);
//        $tipoHabitaciones = [];

        // devolvemos la vista con los tipoHabitaciones
        return view("web.articulo",compact("tipoarticulos"));
    }
}
