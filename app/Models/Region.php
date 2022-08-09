<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //TABLA A CONECTAR A ESTE MODELO
    protected $table="regions";
    
    //LA CLAVE PRIMARIA DE ESA TABLA
        protected $primaryKey = "region_id";
 
    //OMITIR LOS CAMPOS DE AUDITORIA
        public $timestamps = false;

    use HasFactory;

    //RELACION ENTRE REGIONES Y CONTINENTE
    public function continente(){
        //BELONGSTO:PARAMETROS
        //1.EL METODO A RELACIONAR
        //2. LA FK DEL  MODELO A RELACIONAR  EN LE MODELO ACTUAL
        return $this->belongsTo(Continent::class , 'continent_id');
    }

    //RELACION ENTRE REGION 1 - M PAISES
    public function paises(){
        return $this->hasMany(Country::class , 'region_id');
    }
}
