<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Persona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function(Blueprint $table){
            $table->increments('id');
            $table->string('per_prnom',250);
            $table->string('per_senom',250);
            $table->string('per_prape',350);
            $table->string('per_seape',350);
            $table->date('fech_nac');
            $table->time('per_hornac', 3);
            $table->char('per_sex',1);
            $table->char('per_dni',8);
            $table->timestamps();             
                       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona');
    }
}
