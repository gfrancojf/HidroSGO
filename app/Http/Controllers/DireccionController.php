<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Parroquia;
use DB;
use Illuminate\Http\Request;

class DireccionController extends Controller
{
    public function llenarMunicipios(){
        DB::enableQueryLog();
        $id_estado = $_POST['id_estado'];
        $municipios = Municipio::where('estado_id',$id_estado)->orderBy('municipio','asc')->get();
        $q = DB::getQueryLog();
        // dd($q);
        return json_encode($municipios);
    }

    public function llenarParroquias(){
        $id_parroq = $_POST['id_municipio'];
        $parroquias = Parroquia::where('municipio_id',$id_parroq)->orderBy('parroquia','asc')->get();
        // dd($parroquias);
        return json_encode($parroquias);
    }
}
