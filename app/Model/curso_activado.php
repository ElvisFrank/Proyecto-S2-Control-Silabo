<?php

namespace CSilabo\Model;

use Illuminate\Database\Eloquent\Model;

class curso_activado extends Model
{
	protected $table='curso_activado';
    protected $fillable=['curso_id','semestre_id'];

    public function docentesCurso()
    {
    	return $this->belongsToMany('CSilabo\Model\Persona', 'curso_docente')
    	->withPivot('curso_id', 'persona_id');
    }

    public function curso()
    {
    	return $this->belongsTo('CSilabo\Model\Curso');
    }
}
