<?php

namespace CSilabo\Model;

use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    protected $table='semestres';
    protected $fillable=['año','numero'];
    
}
