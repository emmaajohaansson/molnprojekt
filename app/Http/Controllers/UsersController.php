<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;



use Log;
class UsersController extends BaseController
{
    public function get($id) {
      //$results = app('db')->select("SELECT * FROM users WHERE userId = $id");
      //return $results;
      return view('products');
    }

    public function delete($id) {
      app('db')->delete("DELETE FROM users WHERE users.userId = $id");
    }

    public function add(Request $request) {
      $username = $request->input("username");
      $password = $request->input("password");
      $credits = 500;
      app('db')->insert("INSERT INTO `users`(`username`, `password`, `credit`) VALUES ('$username', '$password', $credits)");
    }
}
