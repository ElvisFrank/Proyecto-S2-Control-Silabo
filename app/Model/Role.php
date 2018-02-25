<?php

namespace CSilabo\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table='roles';
    protected $fillable=['nombre'];
    
    public function personas()
    {
    	return $this->belongsToMany('CSilabo\Model\Persona', 'persona_role')
    	->withPivot('persona_id', 'role_id');
    }

}
