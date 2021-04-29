<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CraeteGajiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gaji', function (Blueprint $table) { //membuat nama database dengan nama gaji
            //element-element yang ada di database gaji
            $table->increments('id');
            $table->string('tglgaji');
            $table->integer('nip');
            $table->double('gajipokok');
            $table->double('tunjangan');
            $table->double('potongan');
            $table->double('gajibersih');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('gaji');
    }
}
