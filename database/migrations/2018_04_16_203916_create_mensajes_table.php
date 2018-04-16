<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('email')->nullable();
            $table->string('telefono')->nullable();
            $table->string('dni')->nullable();
            $table->string('asunto')->nullable();
            $table->string('mensaje')->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('paise_id')->unsigned();
            $table->foreign('paise_id')
                  ->references('id')
                  ->on('paises');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')->nullable();

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
        Schema::dropIfExists('mensajes');
    }
}
