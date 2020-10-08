<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_user_rules')->insert([
        'id_rule' => 1,
        'id_menu' => 16,
        'id_level_user' => 4,
        ]);
        
        DB::table('tbl_user_rules')->insert([
        'id_rule' => 2,
        'id_menu' => 1,
        'id_level_user' => 1,
        ]);
        DB::table('tbl_user_rules')->insert([
        'id_rule' => 3,
        'id_menu' => 2,
        'id_level_user' => 1,
        ]);
        DB::table('tbl_user_rules')->insert([
        'id_rule' => 4,
        'id_menu' => 3,
        'id_level_user' => 1,
        ]);
        DB::table('tbl_user_rules')->insert([
        'id_rule' => 5,
        'id_menu' => 4,
        'id_level_user' => 1,
        ]);
        DB::table('tbl_user_rules')->insert([
        'id_rule' => 6,
        'id_menu' => 5,
        'id_level_user' => 1,
        ]);
        DB::table('tbl_user_rules')->insert([
        'id_rule' => 7,
        'id_menu' => 7,
        'id_level_user' => 1,
        ]);
        DB::table('tbl_user_rules')->insert([
        'id_rule' => 8,
        'id_menu' => 8,
        'id_level_user' => 1,
        ]);
        DB::table('tbl_user_rules')->insert([
        'id_rule' => 9,
        'id_menu' => 11,
        'id_level_user' => 1,
        ]);
        DB::table('tbl_user_rules')->insert([
        'id_rule' => 10,
        'id_menu' => 6,
        'id_level_user' => 1,
        ]);
        DB::table('tbl_user_rules')->insert([
        'id_rule' => 11,
        'id_menu' => 14,
        'id_level_user' => 1,
        ]);
        DB::table('tbl_user_rules')->insert([
        'id_rule' => 13,
        'id_menu' => 13,
        'id_level_user' => 1,
        ]);
        DB::table('tbl_user_rules')->insert([
        'id_rule' => 14,
        'id_menu' => 12,
        'id_level_user' => 1,
        ]);
        DB::table('tbl_user_rules')->insert([
        'id_rule' => 15,
        'id_menu' => 10,
        'id_level_user' => 1,
        ]);
        DB::table('tbl_user_rules')->insert([
        'id_rule' => 16,
        'id_menu' => 9,
        'id_level_user' => 1,
        ]);
        DB::table('tbl_user_rules')->insert([
        'id_rule' => 17,
        'id_menu' => 11,
        'id_level_user' => 3,
        ]);
        DB::table('tbl_user_rules')->insert([
        'id_rule' => 19,
        'id_menu' => 17,
        'id_level_user' => 3,
        ]);
        DB::table('tbl_user_rules')->insert([
        'id_rule' => 30,
        'id_menu' => 15,
        'id_level_user' => 1,
        ]);
        DB::table('tbl_user_rules')->insert([
        'id_rule' => 34,
        'id_menu' => 18,
        'id_level_user' => 3,
        ]);
        DB::table('tbl_user_rules')->insert([
        'id_rule' => 37,
        'id_menu' => 12,
        'id_level_user' => 3,
        ]);
        DB::table('tbl_user_rules')->insert([
        'id_rule' => 38,
        'id_menu' => 12,
        'id_level_user' => 6,
        ]);
        DB::table('tbl_user_rules')->insert([
        'id_rule' => 41,
        'id_menu' => 11,
        'id_level_user' => 5,
        ]);
        DB::table('tbl_user_rules')->insert([
        'id_rule' => 42,
        'id_menu' => 19,
        'id_level_user' => 5,
        ]);
        DB::table('tbl_user_rules')->insert([
        'id_rule' => 44,
        'id_menu' => 20,
        'id_level_user' => 5,
        ]);
        DB::table('tbl_user_rules')->insert([
        'id_rule' => 45,
        'id_menu' => 21,
        'id_level_user' => 6,
        ]);
        

    }
}
