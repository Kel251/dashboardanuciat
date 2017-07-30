<?php

namespace Anunciate;
//hjgjhghg
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Suscripcion extends Authenticatable {

    use Notifiable;

    protected $primaryKey = 'Id_suscripcion';
    protected $table = 'cat_suscripcion';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Id_suscripcion', 'id', 'Fecha_ini', 'Fecha_fin', 'Id_tiposus', 'Activo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function scopeName($query, $id){
        //dd("scope: " . $id);
        if($id != ""){
        $query->where('id', '=','1');
                //->orWhere('descripcion', 'like', '%'.$name.'%');
        }
    }

}
