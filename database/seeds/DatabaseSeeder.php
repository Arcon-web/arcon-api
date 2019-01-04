<?php

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
        $this->call(UserTableSeeder::class);
        $this->call(FriendsTableSeeder::class);
        $this->call(ConsoleTableSeeder::class);
        $this->call(GamesTableSeeder::class);
    }
}
