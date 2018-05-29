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
          'ownerId' => 1,
          'image' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/334000/620x/Super-Mario-Level-Up-Boardgame-605999.jpg'
      ],[
          'name' => str_random(10),
          'price' => 199,
          'description' => str_random(50),
          'ownerId' => 1,
          'image' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/334000/620x/Super-Mario-Level-Up-Boardgame-605999.jpg'
      ],[
          'name' => str_random(10),
          'price' => 199,
          'description' => str_random(50),
          'ownerId' => 1,
          'image' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/334000/620x/Super-Mario-Level-Up-Boardgame-605999.jpg'
      ],[
          'name' => str_random(10),
          'price' => 199,
          'description' => str_random(50),
          'ownerId' => 1,
          'image' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/334000/620x/Super-Mario-Level-Up-Boardgame-605999.jpg'
      ],[
          'name' => str_random(10),
          'price' => 199,
          'description' => str_random(50),
          'ownerId' => 1,
          'image' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/334000/620x/Super-Mario-Level-Up-Boardgame-605999.jpg'
      ],[
          'name' => str_random(10),
          'price' => 199,
          'description' => str_random(50),
          'ownerId' => 1,
          'image' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/334000/620x/Super-Mario-Level-Up-Boardgame-605999.jpg'
      ],[
          'name' => str_random(10),
          'price' => 199,
          'description' => str_random(50),
          'ownerId' => 2,
          'image' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/334000/620x/Super-Mario-Level-Up-Boardgame-605999.jpg'
      ],[
          'name' => str_random(10),
          'price' => 199,
          'description' => str_random(50),
          'ownerId' => 2,
          'image' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/334000/620x/Super-Mario-Level-Up-Boardgame-605999.jpg'
      ],[
          'name' => str_random(10),
          'price' => 199,
          'description' => str_random(50),
          'ownerId' => 3,
          'image' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/334000/620x/Super-Mario-Level-Up-Boardgame-605999.jpg'
      ],[
          'name' => str_random(10),
          'price' => 199,
          'description' => str_random(50),
          'ownerId' => 1,
          'image' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/334000/620x/Super-Mario-Level-Up-Boardgame-605999.jpg'
      ],[
          'name' => str_random(10),
          'price' => 199,
          'description' => str_random(50),
          'ownerId' => 5,
          'image' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/334000/620x/Super-Mario-Level-Up-Boardgame-605999.jpg'
      ],[
          'name' => str_random(10),
          'price' => 199,
          'description' => str_random(50),
          'ownerId' => 4,
          'image' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/334000/620x/Super-Mario-Level-Up-Boardgame-605999.jpg'
      ]
    ]);
    }
}
