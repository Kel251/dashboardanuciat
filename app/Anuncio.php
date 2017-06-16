<?php

namespace Anunciate;
//hjgjhghg
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Anuncio extends Authenticatable {

    use Notifiable;

    protected $primaryKey = 'Id_anun';
    protected $table = 'det_anuncios';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Anuncio', 'Descripcion', 'telefono', 'email', 'precio', 'Id_est', 'Id_cat','archivo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
