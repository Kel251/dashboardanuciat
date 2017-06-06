<?php

namespace Anunciate;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model {
    
    protected $table = 'cat_categorias';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['Nom_cat','Id_cat'];
    
    
    
}
