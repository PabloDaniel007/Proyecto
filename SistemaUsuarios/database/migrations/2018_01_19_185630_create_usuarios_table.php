<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /*funcion para crear la tabla*/
    public function up()
    {
     Schema::create('usuarios',function(Blueprint $table){
        $table->increments('id');
        $table->string('nombre');
        $table->string('ap');
        $table->string('am');
        $table->string('email')->unique();
        $table->string('contrasena');
        $table->integer('tipo'); 
        //$table->rememberToken();
        $table->timestamps();
    });
 }
 /*el unique es para que el correo no sea repetido, y el rememberToken es para cuando vas hacer un login
 y en dado de una tabla se descarta del codigo */
    /**
     * Reverse the migrations.
     *
     * @return void  
     */

    /*  esta funcion es para eliminar la tabla */
    public function down()
    {
        Schema::dropIfExists('usuarios'); 

    }
}
