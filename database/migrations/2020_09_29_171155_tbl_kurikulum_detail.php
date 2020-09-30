<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblKurikulumDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_kurikulum_detail', function (Blueprint $table) {
            $table->bigIncrements('id_kurikulum_detail');
            $table->integer('id_kurikulum');
            $table->string('kd_mapel', 5);
            $table->string('kd_jurusan', 5);
            $table->string('kd_tingkatan', 5);
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
