<?php

namespace CSilabo\Model;

use Illuminate\Database\Eloquent\Model;

class curso_docente extends Model
{
    protected $table='curso_docente';
    protected $fillable=['curso_id','persona_id','silabo_id','grupo'];

    public function personas()
    {
    	return 0;
    }
}
