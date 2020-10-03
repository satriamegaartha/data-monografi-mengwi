<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengangkutanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengangkutan', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->date('tanggal');
            $table->string('semester', 20);

            $table->string('darat', 20)->nullable();
            $table->string('air', 20)->nullable();
            $table->string('dermaga', 20)->nullable();
            $table->string('aspal', 20)->nullable();
            $table->string('diperkeras', 20)->nullable();
            $table->string('tanah', 20)->nullable();
            $table->string('motor_air', 20)->nullable();
            $table->string('sepeda', 20)->nullable();
            $table->string('delman', 20)->nullable();
            $table->string('lain_becak', 20)->nullable();
            $table->string('jumlah', 20)->nullable();

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
        Schema::dropIfExists('pengangkutan');
    }
}
