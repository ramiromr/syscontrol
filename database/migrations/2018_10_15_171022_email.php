<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Email extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email', function(Blueprint $table){
            $table->increments('id');
            $table->string('em_usuario',100);
            $table->integer('servidor_id');
            $table->integer('extension_id');
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
        Schema::dropIfExist('email');
    }
}
