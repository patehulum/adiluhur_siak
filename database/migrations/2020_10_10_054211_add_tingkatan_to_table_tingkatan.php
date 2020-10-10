<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTingkatanToTableTingkatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_tingkatan_kelas', function (Blueprint $table) {
            $table->renameColumn('kd_tinkatan', 'kd_tingkatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_tingkatan', function (Blueprint $table) {
            //
        });
    }
}
