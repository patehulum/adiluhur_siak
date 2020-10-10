<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTblTahunAkademik extends Migration
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
            $table->enum('is_aktif',['Aktif','Tidak Aktif']);
            $table->string('semester', 10)->nullable();
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
        Schema::table('tbl_tahun_akademik', function (Blueprint $table) {
            //
        });
    }
}
