<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_pago');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('username');
            $table->string('pais');
            $table->string('departamento');
            $table->string('departamento2')->default('-');
            $table->string('distrito');
            $table->text('direccion');
            $table->text('direccion2');
            $table->string('telefono');
            $table->string('estado')->default('En Proceso');
            $table->boolean('completado')->default(false);
            $table->string('metodo')->default(''); 
            $table->string('paqueteria')->default('paqueteria');
            $table->string('id_rastreo')->default('-');
            $table->longText('productos')->default('{}');
            $table->float('subtotal')->default(0.00);
            $table->float('delivery')->default(0.00);
            $table->dateTime('fecha');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pedidos');
    }
}
