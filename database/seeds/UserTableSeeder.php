<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'mats',
            'email' => 'mats@gmail.com',
            'password' => bcrypt('secret'),
            'avatar' => 'http://arcon.mats.vingerhoets.mtantwerp.eu/storage/images/homer.jpg',
            'console_id' => 'abc123',
        ]);
        DB::table('users')->insert([
            'name' => 'jens',
            'email' => 'jens@gmail.com',
            'password' => bcrypt('secret'),
            'avatar' => 'http://arcon.mats.vingerhoets.mtantwerp.eu/storage/images/Jerry.PNG',
            'console_id' => 'abc124',
        ]);
        DB::table('users')->insert([
            'name' => 'jordy',
            'email' => 'jordy@gmail.com',
            'password' => bcrypt('secret'),
            'avatar' => 'http://arcon.mats.vingerhoets.mtantwerp.eu/storage/images/duck.jpg',
            'console_id' => 'abc125',
        ]);
        DB::table('users')->insert([
            'name' => 'paulien',
            'email' => 'paulien@gmail.com',
            'password' => bcrypt('secret'),
            'avatar' => 'http://arcon.mats.vingerhoets.mtantwerp.eu/storage/images/Blossom.jpg',
            'console_id' => 'abc126',
        ]);
        DB::table('users')->insert([
            'name' => 'ben',
            'email' => 'ben@gmail.com',
            'password' => bcrypt('secret'),
            'avatar' => 'http://arcon.mats.vingerhoets.mtantwerp.eu/storage/images/dino.png',
            'console_id' => 'dec123',
        ]);
        DB::table('users')->insert([
            'name' => 'sander',
            'email' => 'sander@gmail.com',
            'password' => bcrypt('secret'),
            'avatar' => 'http://arcon.mats.vingerhoets.mtantwerp.eu/storage/images/felix.png',
            'console_id' => 'def123',
        ]);
    }
}
