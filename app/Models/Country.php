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

    //RELACIÓN M:M ENTRE PAISES E IDIOMAS
    public function idiomas(){
        //BELONGSTOMANY - PARAMETROS
        //1. MODELOS A RELACIONAR
        //2. LA TABLA PIVOTE
        //3. FK DEL MODELO ACTUAL EN EL PIVOTE
        //4. FK DEL MODELO A RELACIONAR EN LE PIVOTE
        return $this->belongsToMany(Idioma::class ,
                                    'country_languages', 
                                    'country_id',
                                    'language_id'
                                    )->withPivot('official');
    }
}
