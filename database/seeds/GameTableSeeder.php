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
          'name' => str_random(10),
          'price' => 199,
          'description' => str_random(50),
      ]);
    }
}
