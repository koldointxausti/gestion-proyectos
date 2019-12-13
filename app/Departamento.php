<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $fillable = ['nombre'];

    public function empleados()
    {
    	return $this->hasMany('App\Empleado');
    }

    public function jefe()
    {
    	$jefe = $this->hasOne('App\Empleado','id','jefe_id');
    	if(!$jefe) return false;
    	return $jefe;
    }
}
