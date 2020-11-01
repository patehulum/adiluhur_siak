<?php

use App\LevelUser;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            // UserRuleSeeder::class,
            // MenuSeeder::class,
            UserSeeder::class,
            // AgamaSeeder::class,
            // KelasSeeder::class,
            // LevelUserSeeder::class,
        ]);
    }
}
