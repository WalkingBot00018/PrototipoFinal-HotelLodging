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
        Schema::create('invoice_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_factura');
            $table->foreignId('id_reserva');
            $table->foreignId('id_servicio');
            $table->foreignId('id_producto');
            $table->integer('cantidad');
            $table->decimal('valor',10,2);
            $table->timestamps();


            $table->foreign('id_factura')->references('id_factura')->on('bills')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_reserva')->references('id_reserva')->on('reservations')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_servicio')->references('id_servicio')->on('additional_services')->onDelete('cascade')->onUpdate('cascade');
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
