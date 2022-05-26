<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();


            $table->text('cuerpoTexto',250);
            $table->string('tipoNota', 20);
            $table->date('fecha');
            $table->time('horaInicial');
            $table->time('horaFinal');



            $table->timestamps();
        });
    }
    //hola

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notas');
    }
};
