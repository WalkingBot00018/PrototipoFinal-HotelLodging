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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_habitacion');
            $table->foreignId('id_producto');
            $table->integer('stock');
            $table->timestamps();


            $table->foreign('id_habitacion')->references('id_habitacion')->on('rooms')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_producto')->references('id_producto')->on('products')->onDelete('cascade')->onUpdate('cascade');
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
