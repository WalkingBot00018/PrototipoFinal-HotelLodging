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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_usuario');
            $table->string('cargo');
            $table->string('direccion_residencia');
            $table->decimal('ingreso_basico', 10,2);
            $table->date('fecha_ingreso');
            $table->timestamps();


            $table->foreign('id_usuario')->references('id_usuario')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
