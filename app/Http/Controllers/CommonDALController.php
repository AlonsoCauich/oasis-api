<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\calendario;
use App\Models\categorias;
use App\Models\centros_consumo_detalles;
use App\Models\centros_consumo_horarios;
use App\Models\centros_consumo;

use App\Models\hoteles;
use App\Models\locaciones;
use App\Models\propiedades;
class CommonDALController extends Controller
{
    public function findInfo($hotel, $categoria)
    {        
        $data = hoteles::find($hotel);
        if( !empty($data) ){
            $sql_centros_consumo = centros_consumo::where('categoria_id', $categoria)->get();
            $collection = collect($sql_centros_consumo);    
            foreach ($collection as $data_collection) {
                $data_horario = centros_consumo_horarios::select('dia', 'hora_inicio', 'hora_final')->where('centro_consumo_id', $data_collection->id)->orderBy('dia','ASC')->get();
                $data_collection->horarios = !empty($data_horario) ? $data_horario : array();
            }
            $data->centros_consumo = $collection;
        }
        //return $data;
        return response()->json($data);
    }
    public function findCentro($centro)
    {        
        $data = centros_consumo::select('id','nombre','concepto_es','concepto_en','logo','img_portada')
        ->where('id', $centro)->get();
        $collection = collect($data);  
        foreach ($collection as $data_collection) {
            $data_collection->logo = 'https://api-onow.oasishoteles.net/'.$data_collection->logo;
            $data_collection->img_portada = 'https://api-onow.oasishoteles.net/'.$data_collection->img_portada;
            $data_horario = centros_consumo_horarios::select('dia', 'hora_inicio', 'hora_final')->where('centro_consumo_id', $data_collection->id)->orderBy('dia','ASC')->get();
            $data_collection->horarios = !empty($data_horario) ? $data_horario : array();
        }          
        return response()->json($collection);
    }
}
