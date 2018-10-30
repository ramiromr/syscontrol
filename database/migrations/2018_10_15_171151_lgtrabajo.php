<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lgtrabajo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('lgtrabajo', function(Blueprint $table){
            $table->increments('id');
            $table->integer('empresa_id');
            $table->integer('persona_id');
            $table->timestamps();
        }
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('lgtrabajo');
    }
}
