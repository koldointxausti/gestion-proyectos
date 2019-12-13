<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
	protected $fillable = ['nombre','apellido','email','telefono'];
    /*
	RESPONSABLE
	*/
    public function proyecto()
    {
    	return $this->belongsTo('App\Proyecto','id','empleado_id');
    }

    /*
	COLABORADORES
    */
	public function proyectos()
	{
		return $this->belongsToMany ('App\Proyecto')->withPivot('fechainicio', 'fechafin');
	}

    public function departamento()
    {
    	return $this->belongsTo('App\Departamento','departamento_id','id');
    }

    public function esJefe()
    {
        $departamento = $this->belongsTo('App\Departamento','id','jefe_id');
        if(!$departamento) return false;
        return $departamento;
    }
}
