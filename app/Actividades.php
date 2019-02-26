<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
   protected $table = 'actividades';

    protected $fillable = ['titulo', 'descripcion','user_id'];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
