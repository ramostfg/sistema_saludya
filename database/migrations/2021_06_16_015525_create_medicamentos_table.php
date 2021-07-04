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
            $table->string('nombrepat')->nullable();
            $table->text('descripat')->nullable();
            $table->date('fechapat')->nullable();

            $table->string('nombremed')->nullable();
            $table->string('tipomed')->nullable();
            $table->string('presentmed')->nullable();
            $table->string('frecumed')->nullable();

            $table->unsignedBigInteger('persona_id');
            $table->foreign('persona_id')->references('id')->on('perosanas')->onDelete('cascade');

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
