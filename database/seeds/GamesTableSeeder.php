<?php

use Illuminate\Database\Seeder;
use App\Game;
class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Game::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Game::create([
                'title' => $faker->sentence,
                'game_link' => $faker->url,
                'description' => $faker->paragraph,
                'game_image' => $faker->url,

            ]);
        }
    }
}
