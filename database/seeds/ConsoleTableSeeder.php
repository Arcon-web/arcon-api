<?php

use Illuminate\Database\Seeder;

class ConsoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('consoles')->insert([
            'console_id' => 'abc123',
        ]);

        DB::table('consoles')->insert([
            'console_id' => 'abc124',
        ]);

        DB::table('consoles')->insert([
            'console_id' => 'abc125',
        ]);

        DB::table('consoles')->insert([
            'console_id' => 'abc126',
        ]);

        DB::table('consoles')->insert([
            'console_id' => 'dec123',
        ]);

        DB::table('consoles')->insert([
            'console_id' => 'def123',
        ]);

    }
}
