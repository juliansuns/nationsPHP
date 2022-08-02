<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
     //TABLA A CONECTAR A ESTE MODELO
        protected $table="countries";
    
     //LA CLAVE PRIMARIA DE ESA TABLA
         protected $primaryKey = "country_id";
 
     //OMITIR LOS CAMPOS DE AUDITORIA
         public $timestamps = false;
    use HasFactory;
}
