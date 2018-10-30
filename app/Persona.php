<?php

namespace sysControl;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'persona';
    protected $fillable = ['per_prnom','per_senom','per_prape', 'fech_nac', 'per_hornac', 'per_sex', 'per_dni'];
    
}
