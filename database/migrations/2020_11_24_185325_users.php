<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique()->default('');
            $table->string('password')->default('');
            $table->string('username')->unique()->default('');
            $table->text('name')->default('');
            $table->text('last_name')->default('');
            $table->boolean('admin')->default(false);
            $table->string('telefono')->default('999999999');
            $table->string('signo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
