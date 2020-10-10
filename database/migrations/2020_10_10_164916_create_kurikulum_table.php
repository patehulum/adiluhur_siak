<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKurikulumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_kurikulum', function (Blueprint $table) {
            $table->bigIncrements('id_kurikulum');
            $table->string('nama_kurikulum', 30);
            $table->enum('is_aktif',['Aktif','Tidak Aktif']);
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
        Schema::table('tbl_kurikulum', function (Blueprint $table) {
            //
        });
    }
}
