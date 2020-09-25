<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefaccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refacciones', function (Blueprint $table) {
            $table->id();
            $table->text('tipo_id');
            $table->text('cilindraje');
            $table->integer('year');
            $table->text('modelo');
            $table->text('color');
            $table->text('sistema');
            $table->text('foto');
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
        Schema::dropIfExists('refacciones');
    }
}
