<?php

namespace CSilabo\Model;

use Illuminate\Database\Eloquent\Model;

class curso_requisito extends Model
{
	protected $table='curso_requisito';
    protected $fillable=['curso_id','curso_requisito_id'];

}
