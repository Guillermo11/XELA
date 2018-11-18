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
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');

          $table->string('fercha_hoy');
          $table->string('nombres');
          $table->string('apellidos');
          $table->string('dpi')->unique();
          $table->string('edad');

          $table->string('fecha_nacimiento');
          $table->string('genero');
          $table->string('estado_civil');
          $table->string('telefono')->unique();
          $table->string('direccion');
          $table->string('nunicipio');

          $table->string('educacion');
          $table->string('carrera_titulo');

          $table->string('expe_laboral')->nullable();
          $table->string('tiempo_laborado')->nullable();
          $table->string('empresa_laborado')->nullable();
          $table->string('puesto_laboral')->nullable();

          $table->string('laboro_fuera')->nullable();
          $table->string('tiempofuera')->nullable();
          $table->string('ruta_file')->nullable();
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
        Schema::dropIfExists('usuarios');
    }
}
