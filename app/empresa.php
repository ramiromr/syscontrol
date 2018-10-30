<?php

namespace sysControl;

use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    protected $table = 'empresa';
    protected $fillable = ['emp_razon','emp_telf'];
}
