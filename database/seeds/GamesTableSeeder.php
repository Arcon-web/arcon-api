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
        
        DB::table('games')->insert([
            'title' => 'Pong',
            'description' => 'This is a pong game.',
            'game_image' => 'http://arcon.mats.vingerhoets.mtantwerp.eu/storage/images/image.jpg',
            'game_link' => 'https://arcon-pong.herokuapp.com',
        ]);
        DB::table('games')->insert([
            'title' => 'Tetris',
            'description' => 'This is a tetris game.',
            'game_image' => 'http://arcon.mats.vingerhoets.mtantwerp.eu/storage/images/tetris.PNG',
            'game_link' => 'http://google.com',
        ]);
        DB::table('games')->insert([
            'title' => 'Pong',
            'description' => 'This is a pong game.',
            'game_image' => 'http://arcon.mats.vingerhoets.mtantwerp.eu/storage/images/bomberman.PNG',
            'game_link' => 'http://google.com',
        ]);

            
        
    }
}
