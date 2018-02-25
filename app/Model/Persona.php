<?php

namespace CSilabo\Model;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table='personas';
    protected $fillable=['nombre','paterno','materno','codigo','telefono','celular','email','password'];

    public function roles()
    {
    	return $this->belongsToMany('CSilabo\Model\Role', 'persona_role')
    	->withPivot('persona_id', 'role_id');
    }
}
