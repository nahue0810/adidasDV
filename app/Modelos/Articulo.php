<?php

namespace adidasDV\Modelos;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = "articulo";

    protected $primaryKey = "id_articulo";

    // Si la tabla de este modelo tiene o no los campos created_at y updated_at
    public $timestamps = true;

    // Acá van todos los campos de la tabla que vamos a poder modificar desde nuestro sistema
    protected $fillable = ["nombre","imagen","id_tipo_articulo"];
    
    public function TipoArticulo(){
            return $this->belongsTo(TipoArticulo::class,"id_tipo_articulo");
        }

}
