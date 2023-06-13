<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggajianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggajian', function (Blueprint $table) {
            $table->id();
            $table->string('bulan');
            $table->string('potongan');
            $table->string('total');
            $table->unsignedBigInteger('id_employee');
            $table->unsignedBigInteger('id_tunjangan');
            $table->timestamps();

            $table->foreign('id_employee')->references('id')->on('employee')->onDelete('cascade');

            $table->foreign('id_tunjangan')->references('id')->on('tunjangan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penggajian');
    }
}
