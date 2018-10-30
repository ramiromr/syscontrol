<?php

namespace sysControl;

use Illuminate\Database\Eloquent\Model;

class lgtrabajo extends Model
{
protected $table = 'lgtrabajo';
protected $fillable = ['empresa_id','persona_id'];
}
