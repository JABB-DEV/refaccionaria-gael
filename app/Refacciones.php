<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;

class Refacciones extends Model
{
    protected $table = 'refacciones';
    protected $fillable = ['tipo_id','cilindraje','year','modelo','color','sistema','foto'];
    protected $timestamp = true;
    
    public static function getFileName($file, $actual = ''){
        if($actual == ''){
            Storage::disk('public')->delete('imagenes/'.$actual);
            $imageName = Str::random(20) . ".jpg";
            $imagen = Image::make($file)->encode("jpg", 75);
            $imagen->resize(200, 200, function($constraint){
                $constraint->upsize();
            });
            Storage::disk('public')->put("imagenes/caratulas/$imageName", $imagen->stream());
            return $imageName;
        }else{
        $imageName = Str::random(20) . ".jpg";
        $imagen = Image::make($file)->encode("jpg", 75);
        $imagen->resize(200, 200, function($constraint){
            $constraint->upsize();
        });
        Storage::disk('public')->put("imagenes/caratulas/$imageName", $imagen->stream());
        return $imageName;
        }
    }

    public static function queryGenerator($campo, $id,$params = array()){
        if($id != ''){
            $query = "SELECT DISTINCT $campo FROM refacciones WHERE tipo_id = $id ";
            ;
        }else{
            $query = "SELECT $campo FROM tipos, refacciones WHERE tipos.id = refacciones.tipo_id ";
        }

        return DB::select(Refacciones::campos($params, $query));
    }
    public static function campos($campos = array(), $consulta){
        foreach($campos as $key => $query){
            $campos[$key] =  $query;
        }

         foreach($campos as $key => $param){
            $consulta .= " AND $key LIKE '%$param%'";
        }

         return $consulta;
    }
}
