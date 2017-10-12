<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitrumahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unitrumah', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->decimal('kavling');
            $table->integer('blok');
            $table->integer('no_rumah');
            $table->decimal('harga_rumah');
            $table->decimal('luas_tanah');
            $table->decimal('luas_bangunan');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unitrumah');
    }
}
