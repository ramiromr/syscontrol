<?php

namespace sysControl;

use Illuminate\Database\Eloquent\Model;

class extension extends Model
{
    protected $table = 'extension';
    protected $fillable = ['ext_nom'];
}
