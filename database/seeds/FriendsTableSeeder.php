<?php

use Illuminate\Database\Seeder;

class FriendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('friends')->insert([
            'user_id' => '1',
            'friend_id' => '2'
        ]);
        DB::table('friends')->insert([
            'user_id' => '1',
            'friend_id' => '3'
        ]);
        DB::table('friends')->insert([
            'user_id' => '1',
            'friend_id' => '5'
        ]);
        DB::table('friends')->insert([
            'user_id' => '1',
            'friend_id' => '6'
        ]);
        DB::table('friends')->insert([
            'user_id' => '2',
            'friend_id' => '3'
        ]);
        DB::table('friends')->insert([
            'user_id' => '2',
            'friend_id' => '5'
        ]);
        DB::table('friends')->insert([
            'user_id' => '2',
            'friend_id' => '6'
        ]);
        DB::table('friends')->insert([
            'user_id' => '3',
            'friend_id' => '4'
        ]);
        



    }
}
