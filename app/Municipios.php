<?php

namespace Anunciate;

use Illuminate\Database\Eloquent\Model;

class Municipios extends Model {
    
    protected $primaryKey = 'Id_mun';
    protected $table = 'cat_municipios';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['Nom_mun','Id_est'];
    
    public static function muni($id) {
        return Municipios::where('Id_est','=',$id)->get();
    }
    
    
}
