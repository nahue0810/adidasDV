<?php

namespace adidasDV\Http\Controllers;

use adidasDV\Modelos\Articulo;
use adidasDV\Modelos\TipoArticulo;
use Illuminate\Http\Request;

class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Articulo $articulo)
    {
        $articulo = articulo->all();
        
        return view('panel.articulos.index')->with('articulo', $articulo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(TipoArticulo $tipoarticulo)
    {
        $tipos = $$tipoarticulo->all()->pluck('id_tipo_articulo','nombre');
        
        return view('panel.articulos.form',compact('tipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validaciones = [
            "nombre" => "required|string",
            "imagen" => "required",
            "id_tipo_articulo" => "required|exists:tipo_articulo,id_tipo_articulo",
        ];

        $validacion = $request->validate($validaciones);


        // pasó la validación

        $articulo = Articulo::create($request->all());

        if($articulo)
            return redirect()->route("articulos.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
