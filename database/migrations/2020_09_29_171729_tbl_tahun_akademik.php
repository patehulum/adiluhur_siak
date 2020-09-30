<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblTahunAkademik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tahun_akademik', function (Blueprint $table) {
            $table->bigIncrements('id_tahun_akademik');
            $table->string('tahun_akademik', 10);
            $table->enum('is_aktif',['Y','N']);
            $table->string('semester', 10);
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
