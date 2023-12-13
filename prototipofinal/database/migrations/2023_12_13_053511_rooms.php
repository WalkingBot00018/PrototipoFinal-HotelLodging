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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id('id_habitacion');
            $table->integer('numero');
            $table->foreignId('id_estado_hab');
            $table->foreignId('id_tipo_hab');
            $table->decimal('tarifa', 10,2);
            $table->integer('capacidad');
            $table->string('imagen');
            $table->timestamps();


            $table->foreign('id_estado_hab')->references('id_estado_hab')->on('room_status')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_tipo_hab')->references('id_tipo_hab')->on('room_type')->onDelete('cascade')->onUpdate('cascade');
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
