<?php

namespace sysControl;

use Illuminate\Database\Eloquent\Model;

class celular extends Model {

    protected $table = 'celular';
    protected $fillable = ['persona_id', 'cel_num'];

}
