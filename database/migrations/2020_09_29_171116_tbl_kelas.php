<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblKelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_kelas', function (Blueprint $table) {
            $table->string('kd_kelas', 10)->promary();
            $table->string('nama_kelas', 30);
            $table->string('kd_tingkatan', 5);
            $table->string('kd_jurusan', 5);
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
        //
    }
}
