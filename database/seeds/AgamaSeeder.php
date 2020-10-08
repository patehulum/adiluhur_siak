<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('tbl_agama')->insert([
         'kd_agama' => '1',
         'nama_agama' => 'ISLAM',
         ]);
         DB::table('tbl_agama')->insert([
         'kd_agama' => '2',
         'nama_agama' => 'KRISTEN / PROTESTAN',
         ]);
         DB::table('tbl_agama')->insert([
         'kd_agama' => '3',
         'nama_agama' => 'KATHOLIK',
         ]);
         DB::table('tbl_agama')->insert([
         'kd_agama' => '4',
         'nama_agama' => 'HINDU',
         ]);
         DB::table('tbl_agama')->insert([
         'kd_agama' => '5',
         'nama_agama' => 'BUDHA',
         ]);
         DB::table('tbl_agama')->insert([
         'kd_agama' => '6',
         'nama_agama' => 'KONG HU CHU',
         ]);

    }
}
