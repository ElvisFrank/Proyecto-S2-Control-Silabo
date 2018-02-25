<?php

namespace CSilabo\Model;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table='cursos';
    protected $fillable=['codigo','nombre','creditos','hora_teorica','hora_practica','area','ciclo','caracter'];

    public function curso_requisito()
    {
    	return $this->belongsToMany('CSilabo\Model\Curso', 'curso_requisito')
    	->withPivot('curso_id', 'curso_requisito_id');
    }

}
