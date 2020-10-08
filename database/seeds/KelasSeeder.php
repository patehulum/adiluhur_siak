<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('tbl_kelas')->insert([
         'kd_kelas' => 'IPAX1',
         'nama_kelas' => 'X IPA 1',
         'kd_tingkatan' => '001',
         'kd_jurusan' => 'IPA',
         ]);
         
         DB::table('tbl_kelas')->insert([
         'kd_kelas' => 'IPAX2',
         'nama_kelas' => 'X IPA 2',
         'kd_tingkatan' => '001',
         'kd_jurusan' => 'IPA',
         ]);
         DB::table('tbl_kelas')->insert([
         'kd_kelas' => 'IPAXI1',
         'nama_kelas' => 'XI IPA 1',
         'kd_tingkatan' => '002',
         'kd_jurusan' => 'IPA',
         ]);
         DB::table('tbl_kelas')->insert([
         'kd_kelas' => 'IPAXI2',
         'nama_kelas' => 'XI IPA 2',
         'kd_tingkatan' => '002',
         'kd_jurusan' => 'IPA',
         ]);
         DB::table('tbl_kelas')->insert([
         'kd_kelas' => 'IPAXII',
         'nama_kelas' => 'XII IPA',
         'kd_tingkatan' => '003',
         'kd_jurusan' => 'IPA',
         ]);
         DB::table('tbl_kelas')->insert([
         'kd_kelas' => 'IPSX1',
         'nama_kelas' => 'X IPS 1',
         'kd_tingkatan' => '001',
         'kd_jurusan' => 'IPS',
         ]);
         DB::table('tbl_kelas')->insert([
         'kd_kelas' => 'IPSX2',
         'nama_kelas' => 'X IPS 2',
         'kd_tingkatan' => '001',
         'kd_jurusan' => 'IPS',
         ]);
         DB::table('tbl_kelas')->insert([
         'kd_kelas' => 'IPSXI',
         'nama_kelas' => 'XI IPS',
         'kd_tingkatan' => '002',
         'kd_jurusan' => 'IPS',
         ]);
         DB::table('tbl_kelas')->insert([
         'kd_kelas' => 'IPSXII',
         'nama_kelas' => 'XII IPS',
         'kd_tingkatan' => '003',
         'kd_jurusan' => 'IPS',
         ]);

    }
}
