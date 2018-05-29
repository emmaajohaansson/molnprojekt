<?php

use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('reviews')->insert([
        [
          'review' => str_random(10),
          'gameId' => 1,
          'rating' => 3
      ],[
        'review' => str_random(10),
        'gameId' => 1,
        'rating' => 3
    ],[
      'review' => str_random(10),
      'gameId' => 1,
      'rating' => 3
  ],[
    'review' => str_random(10),
    'gameId' => 1,
    'rating' => 3
],[
  'review' => str_random(10),
  'gameId' => 1,
  'rating' => 3
],[
  'review' => str_random(10),
  'gameId' => 6,
  'rating' => 3
],[
  'review' => str_random(10),
  'gameId' => 1,
  'rating' => 3
],[
  'review' => str_random(10),
  'gameId' => 5,
  'rating' => 3
],[
  'review' => str_random(10),
  'gameId' => 1,
  'rating' => 3
],[
  'review' => str_random(10),
  'gameId' => 1,
  'rating' => 3
],[
  'review' => str_random(10),
  'gameId' => 1,
  'rating' => 3
],[
  'review' => str_random(10),
  'gameId' => 2,
  'rating' => 3
],[
  'review' => str_random(10),
  'gameId' => 2,
  'rating' => 3
],[
  'review' => str_random(10),
  'gameId' => 2,
  'rating' => 3
],[
  'review' => str_random(10),
  'gameId' => 3,
  'rating' => 3
],
    ]);
    }
}
