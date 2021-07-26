<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->id();
            
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('venta')->references('id')->on('venta'); 
            $table->foreign('productos')->references('id')->on('productos'); 

            $table->integer('cantidad');
            $table->decimal('preciotal');
            $table->id('estadoVenta');
            $table->integer('desc');
            
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
        Schema::dropIfExists('detalle_ventas');
    }
}
