<?php

namespace sysControl;

use Illuminate\Database\Eloquent\Model;

class email extends Model
{
    protected $table = 'email';
    protected $fillable = ['em_usuario','servidor_id','extension_id'];
}
