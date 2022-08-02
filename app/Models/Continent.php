<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //TABLA A CONECTAR A ESTE MODELO
        protected $table="continents";
    
    //LA CLAVE PRIMARIA DE ESA TABLA
        protected $primaryKey = "continent_id";

    //OMITIR LOS CAMPOS DE AUDITORIA
        public $timestamps = false;

    use HasFactory;
}
