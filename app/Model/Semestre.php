<?php

namespace CSilabo\Model;

use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    protected $table='semestres';
    protected $fillable=['año','numero'];

    public function cursos()
    {
    	return $this->belongsToMany('CSilabo\Model\Curso', 'curso_activado')
    	->withPivot('curso_id', 'semestre_id');
    }
}
