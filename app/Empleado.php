<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
	protected $fillable = ['nombre','apellido','email','telefono'];
    public function proyecto()
    {
    	return $this->belongsTo('App\Proyecto','id','empleado_id');
    }
}
