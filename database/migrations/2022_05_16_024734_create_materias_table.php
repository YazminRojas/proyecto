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
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->string('NombreMateria', 50);
            $table->string('ClaveMateria', 10);
            $table->string('DocenteMateria', 50);
            $table->string('ApellidoPaterno', 50);
            $table->string('ApellidoMaterno', 50);
            $table->string('Edificio', 1);
            $table->string('Salon', 10);
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
        Schema::dropIfExists('materias');
    }
};