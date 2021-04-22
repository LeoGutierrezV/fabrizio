<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductoReserva extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProductoReserva', function (Blueprint $table) {
            $table->id();
            $table->integer('producto_id');
            $table->string('username');
            $table->dateTime('fecha')->default(date_format(new DateTime(),'Y-m-d H:i:s'));
            $table->string('nombre')->default('');
            $table->float('precio')->default(0);
            $table->integer('cantidad')->default(0);
            $table->text('categoria')->default('-');
            $table->string('color')->default('-');
            $table->string('talla')->default('U');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ProductoReserva');
    }
}
