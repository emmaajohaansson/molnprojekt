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
          'gameId' => 1
      ],[
        'review' => "Strålande!",
        'gameId' => 2
    ],[
      'review' => "Strålande!",
      'gameId' => 3
  ],[
    'review' => "Strålande!",
    'gameId' => 1
],[
  'review' => "Strålande!",
  'gameId' => 2
],[
  'review' => "Strålande!",
  'gameId' => 6
],[
  'review' => "Mycket bra",
  'gameId' => 1
],[
  'review' => "Mycket bra",
  'gameId' => 5
],[
  'review' => "Mycket bra",
  'gameId' => 1
],[
  'review' => "Mycket bra",
  'gameId' => 1
],[
  'review' => "Knappt spelbart",
  'gameId' => 1
],[
  'review' => "Knappt spelbart",
  'gameId' => 2
],[
  'review' => "Mycket bra",
  'gameId' => 2
],[
  'review' => "ok",
  'gameId' => 2
],[
  'review' => "Uruselt!",
  'gameId' => 3
],
    ]);
    }
}
