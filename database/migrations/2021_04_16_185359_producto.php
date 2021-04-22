<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Producto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Producto', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->default('');
            $table->text('descripcion')->default('');
            $table->float('precio')->default(0);
            $table->integer('inventario')->default(0);
            $table->text('categoria')->default('-');
            $table->string('color')->default('-');
            $table->string('talla')->default('U');
            $table->longText('imagen1')->default('https://i.imgur.com/i1K4XH8.png');
            $table->longText('imagen2')->default('https://i.imgur.com/i1K4XH8.png');
            $table->longText('imagen3')->default('https://i.imgur.com/i1K4XH8.png');
            $table->longText('imagen4')->default('https://i.imgur.com/i1K4XH8.png');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Producto');
    }
}
