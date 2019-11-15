<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public function proyecto()
    {
    	return $this->belongsTo('App\Proyecto','id','empleado_id');
    }
}
