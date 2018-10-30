<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Celular extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('celular', function(Blueprint $table){
            $table->increments('id');
            $table->integer('persona_id');
            $table->char('cel_num',9);
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
        Schema::dropIfExist('celular');
    }
}
