<?php

namespace Anunciate;

use Illuminate\Database\Eloquent\Model;

class Estados extends Model {
    
    protected $table = 'cat_estados';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['Nom_est','Id_est'];
    
    
}
