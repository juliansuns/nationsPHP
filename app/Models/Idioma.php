<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{

    //TABLA A CONECTAR A ESTE MODELO
    protected $table="languages";
    
    //LA CLAVE PRIMARIA DE ESA TABLA
        protected $primaryKey = "language_id";
 
    //OMITIR LOS CAMPOS DE AUDITORIA
        public $timestamps = false;

    use HasFactory;

    //RELACION ENTRE IDIOMA Y PAISES
    public function paises(){
        return $this->belongsToMany(Country::class,
                                    'country_languages',
                                    'language_id',
                                    'country_id');
    }
}
