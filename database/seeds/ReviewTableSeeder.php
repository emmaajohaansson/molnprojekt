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
          'review' => "Strålande!",
          'gameId' => 1,
          'rating' => 3
      ],[
        'review' => "Strålande!",
        'gameId' => 2,
        'rating' => 3
    ],[
      'review' => "Strålande!",
      'gameId' => 3,
      'rating' => 3
  ],[
    'review' => "Strålande!",
    'gameId' => 1,
    'rating' => 3
],[
  'review' => "Strålande!",
  'gameId' => 2,
  'rating' => 3
],[
  'review' => "Strålande!",
  'gameId' => 6,
  'rating' => 3
],[
  'review' => "Mycket bra",
  'gameId' => 1,
  'rating' => 3
],[
  'review' => "Mycket bra",
  'gameId' => 5,
  'rating' => 3
],[
  'review' => "Mycket bra",
  'gameId' => 1,
  'rating' => 3
],[
  'review' => "Mycket bra",
  'gameId' => 1,
  'rating' => 3
],[
  'review' => "Knappt spelbart",
  'gameId' => 1,
  'rating' => 3
],[
  'review' => "Knappt spelbart",
  'gameId' => 2,
  'rating' => 3
],[
  'review' => "Mycket bra",
  'gameId' => 2,
  'rating' => 3
],[
  'review' => "ok",
  'gameId' => 2,
  'rating' => 3
],[
  'review' => "Uruselt!",
  'gameId' => 3,
  'rating' => 3
],
    ]);
    }
}
