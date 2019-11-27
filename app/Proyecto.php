<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
	protected $fillable = ['nombre','titulo','fechainicio','fechafin','horasestimadas'];
    public function empleado()
    {
    	// no hace falta especificar el nombre del campo porque es nombredelatabla_id
        return $this->hasOne('App\Empleado','id','empleado_id');
    }
}
