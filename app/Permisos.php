<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permisos extends Model
{
    protected $table = 'permisos';

    protected $fillable = ['permiso1', 'permiso2','permiso3','user_id'];

    public function user(){
    	return $this->belongsTo('App\User');
    }

}
