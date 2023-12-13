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
        Schema::create('bills', function (Blueprint $table) {
            $table->id('id_factura');
            $table->foreignId('id_cliente');
            $table->date('fecha_factura');
            $table->decimal('porcentaje_impuesto',10,2);
            $table->decimal('descuento',10,2);
            $table->decimal('total',10,2);
            $table->foreignId('id_reserva');
            $table->timestamps();


            $table->foreign('id_cliente')->references('id_cliente')->on('customers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_reserva')->references('id_reserva')->on('reservations')->onDelete('cascade')->onUpdate('cascade');
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
