<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->id();

            $table->string('nombremed')->nullable();
            $table->string('tipomed')->nullable();
            $table->string('presentmed')->nullable();
            $table->string('frecumed')->nullable();

            $table->unsignedBigInteger('patologia_id');
            $table->foreign('patologia_id')->references('id')->on('patologias')->onDelete('cascade');

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
        Schema::dropIfExists('medicamentos');
    }
}
