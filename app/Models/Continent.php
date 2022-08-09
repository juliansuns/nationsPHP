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

    //RELACION ENTRE CONTINENTE Y REGION
    //1. EL MODELO A RELACIONAR 
    //2. LA FK DEL MODELO ACTUAL EN EL MODELO A RELACIONAR 
    public function regiones(){
        return $this->hasMany(Region::class ,'continent_id');
    }

    // RELACION ENTRE CONTINENTE Y SUS PAISES:
    // ABUELO : CONTINENT
    // PAPA : REGION
    // NIETO : COUNTRY

    public function paises(){
        //HASMANYTHROUGH PARAMETROS
        //1. MODELO NIETO 
        //2. MODELO PAPÁ
        //3. FK DEL ABUELO EN EL PAPÁ
        //4. FK DEL PAPA EN EL NIETO
        return $this->hasManyThrough(Country::class,
                                    region::class,
                                    'continent_id',
                                    'region_id');

    }
}
