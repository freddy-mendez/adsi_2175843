<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computadors', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('marca');
            $table->integer('serial');
            $table->string('SO');
            $table->integer('ram_gb');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('computadors');
    }
}
