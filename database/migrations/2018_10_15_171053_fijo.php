<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fijo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fijo', function(Blueprint $table){
            $table->increments('id');
            $table->string('telf_num',6);
            $table->integer('anexo_id');
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
        Schema::dropIfExist('fijo');
    }
}
