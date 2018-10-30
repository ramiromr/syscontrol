<?php

namespace sysControl;

use Illuminate\Database\Eloquent\Model;

class fijo extends Model
{
protected $table = 'fijo';
protected $fillable = ['telf_num','anexo_id','persona_id'];
}