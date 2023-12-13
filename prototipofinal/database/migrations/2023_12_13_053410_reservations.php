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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id('id_reserva');
            $table->foreignId('id_cliente');
            $table->date('fecha_reserva');
            $table->integer('cant_habit');
            $table->integer('adultos');
            $table->integer('niños');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->decimal('valor', 10, 2);
            $table->foreignId('id_estado_hab');
            $table->foreignId('id_metodo_pago');
            $table->foreignId('id_estado_reserva');
            $table->timestamps();


            $table->foreign('id_estado_hab')->references('id_estado_hab')->on('room_status')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_metodo_pago')->references('id_metodo_pago')->on('payment_method')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_estado_reserva')->references('id_estado_reserva')->on('reservation_status')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_cliente')->references('id_cliente')->on('customers')->onDelete('cascade')->onUpdate('cascade');

            
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
