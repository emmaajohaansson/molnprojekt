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
        [
          'username' => str_random(10),
          'password' => str_random(10),
          'credit' => 500,
          //'gamesOwned' => [1]
      ],[
        'username' => str_random(10),
        'password' => str_random(10),
        'credit' => 500,
        //'gamesOwned' => [1]
      ],[
        'username' => str_random(10),
        'password' => str_random(10),
        'credit' => 500,
        //'gamesOwned' => [1]
      ],[
        'username' => str_random(10),
        'password' => str_random(10),
        'credit' => 500,
        //'gamesOwned' => [1]
      ],[
        'username' => str_random(10),
        'password' => str_random(10),
        'credit' => 500,
        //'gamesOwned' => [1]
      ],[
        'username' => str_random(10),
        'password' => str_random(10),
        'credit' => 500,
        //'gamesOwned' => [1]
      ],[
        'username' => str_random(10),
        'password' => str_random(10),
        'credit' => 500,
        //'gamesOwned' => [1]
      ],[
        'username' => str_random(10),
        'password' => str_random(10),
        'credit' => 500,
        //'gamesOwned' => [1]
      ],[
        'username' => str_random(10),
        'password' => str_random(10),
        'credit' => 500,
        //'gamesOwned' => [1]
      ],[
        'username' => str_random(10),
        'password' => str_random(10),
        'credit' => 500,
        //'gamesOwned' => [1]
      ],[
        'username' => str_random(10),
        'password' => str_random(10),
        'credit' => 500,
        //'gamesOwned' => [1]
      ],[
        'username' => str_random(10),
        'password' => str_random(10),
        'credit' => 500,
        //'gamesOwned' => [1]
      ]
    ]);
    }
}
