<?php

namespace adidasDV\Modelos;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = "sucursales";

    protected $primaryKey = "id_sucursal";

    // Si la tabla de este modelo tiene o no los campos created_at y updated_at
    public $timestamps = true;

    // Acá van todos los campos de la tabla que vamos a poder modificar desde nuestro sistema
    protected $fillable =   ["nombre","imagen","descripcion"];
}
