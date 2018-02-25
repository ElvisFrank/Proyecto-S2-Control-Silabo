<?php

namespace CSilabo\Model;

use Illuminate\Database\Eloquent\Model;

class Sumilla extends Model
{
    protected $table='sumillas';
    protected $fillable=['descripcion','fecha','estado'];
}
