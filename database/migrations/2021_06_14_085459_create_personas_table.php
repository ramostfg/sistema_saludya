<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('personas')) {
            Schema::create('personas', function (Blueprint $table) {
                $table->id();
                
                $table->string('nombre')->nullable();
                $table->string('apellido')->nullable();
                $table->string('cedula')->unique()->nullable();
                $table->integer('edad')->nullable();
                $table->date('fechanac')->nullable();
                $table->string('genero')->nullanle();
                $table->string('telefono')->nullable();
                $table->string('movil')->nullable();
                $table->string('correo')->nullable();

                $table->integer('serial')->unique()->nullable();
                $table->integer('codigo')->unique()->nullable();

                $table->string('entidad')->nullable();
                $table->string('municipio')->nullable();
                $table->string('parroquia')->nullable();
                $table->string('sector')->nullable();
                $table->string('direccion')->nullable();

                $table->timestamps();
            });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
