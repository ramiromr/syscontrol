<?php

namespace sysControl;

use Illuminate\Database\Eloquent\Model;

class dirempresa extends Model
{
    protected $table = 'dirempresa';
    protected $fillable = ['direm_ubi','empresa_id'];
}
