<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('direccions')) {
            Schema::create('direccions', function (Blueprint $table) {
                $table->id();

                $table->string('entidad')->nullable();
                $table->string('municipio')->nullable();
                $table->string('parroquia')->nullable();
                $table->string('sector')->nullable();
                $table->string('direccion')->nullable();
                
                $table->unsignedBigInteger('persona_id');
                $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');

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
        Schema::dropIfExists('direccions');
    }
}
