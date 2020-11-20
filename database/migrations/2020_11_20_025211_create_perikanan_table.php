<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerikananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perikanan', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id');
            $table->integer('periode_id');
            $table->date('tanggal');
            $table->string('semester', 20);

            $table->string('bandeng_luas', 20)->nullable();
            $table->string('bandeng_hasil', 20)->nullable();
            $table->string('udang_luas', 20)->nullable();
            $table->string('udang_hasil', 20)->nullable();
            $table->string('buaya_luas', 20)->nullable();
            $table->string('buaya_hasil', 20)->nullable();
            $table->string('kurakura_luas', 20)->nullable();
            $table->string('kurakura_hasil', 20)->nullable();
            $table->string('lainnya_luas', 20)->nullable();
            $table->string('lainnya_hasil', 20)->nullable();

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
        Schema::dropIfExists('perikanan');
    }
}
