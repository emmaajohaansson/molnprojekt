<?php

use Illuminate\Database\Seeder;

class GameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('games')->insert([
        [
          'name' => str_random(10),
          'price' => 199,
          'description' => str_random(50),
          'image' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/334000/620x/Super-Mario-Level-Up-Boardgame-605999.jpg'
      ],[
          'name' => str_random(10),
          'price' => 199,
          'description' => str_random(50),
          'image' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/334000/620x/Super-Mario-Level-Up-Boardgame-605999.jpg'
      ],[
          'name' => str_random(10),
          'price' => 199,
          'description' => str_random(50),
          'image' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/334000/620x/Super-Mario-Level-Up-Boardgame-605999.jpg'
      ],[
          'name' => str_random(10),
          'price' => 199,
          'description' => str_random(50),
          'image' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/334000/620x/Super-Mario-Level-Up-Boardgame-605999.jpg'
      ],[
          'name' => str_random(10),
          'price' => 199,
          'description' => str_random(50),
          'image' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/334000/620x/Super-Mario-Level-Up-Boardgame-605999.jpg'
      ],[
          'name' => str_random(10),
          'price' => 199,
          'description' => str_random(50),
          'image' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/334000/620x/Super-Mario-Level-Up-Boardgame-605999.jpg'
      ],[
          'name' => str_random(10),
          'price' => 199,
          'description' => str_random(50),
          'image' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/334000/620x/Super-Mario-Level-Up-Boardgame-605999.jpg'
      ],[
          'name' => str_random(10),
          'price' => 199,
          'description' => str_random(50),
          'image' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/334000/620x/Super-Mario-Level-Up-Boardgame-605999.jpg'
      ],[
          'name' => str_random(10),
          'price' => 199,
          'description' => str_random(50),
          'image' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/334000/620x/Super-Mario-Level-Up-Boardgame-605999.jpg'
      ],[
          'name' => str_random(10),
          'price' => 199,
          'description' => str_random(50),
          'image' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/334000/620x/Super-Mario-Level-Up-Boardgame-605999.jpg'
      ],[
          'name' => str_random(10),
          'price' => 199,
          'description' => str_random(50),
          'image' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/334000/620x/Super-Mario-Level-Up-Boardgame-605999.jpg'
      ],[
          'name' => str_random(10),
          'price' => 199,
          'description' => str_random(50),
          'image' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/334000/620x/Super-Mario-Level-Up-Boardgame-605999.jpg'
      ]
    ]);
    }
}
