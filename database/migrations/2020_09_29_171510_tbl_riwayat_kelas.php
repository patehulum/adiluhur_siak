<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblRiwayatKelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_riwayat_kelas', function (Blueprint $table) {
            $table->bigIncrements('id_riwayat');
            $table->string('kd_kelas', 5);
            $table->string('nis', 11);
            $table->integer('id_tahun_akademik');
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
