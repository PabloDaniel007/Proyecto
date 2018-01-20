<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRopasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ropas',function(Blueprint $table){
        $table->increments('id');
        $table->string('nombre');
        $table->integer('usuarios_id')->unsigned(); 
        $table->timestamps();
        $table->foreign('usuarios_id')->references('id')->on('usuarios');
    });
 }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ropas');
    }
}
