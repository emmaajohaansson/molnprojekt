<?php

namespace App\Http\Controllers;

//use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;



use Log;
class UsersController extends BaseController
{
    public function get($id) {
      $results = app('db')->select("SELECT * FROM users WHERE userId = $id");
/*
      $resultArray = json_decode($results);
      $username = var_dump($resultArray->username);
      return view('user', ['username' => $username]);

      $json = (array) json_decode($results);
      $username = $json[0]['username'];
      return view('user', ['username' => $username]);*/
      //return $json;
      return view('user', ['username' => 'Username'], ['id' => 'ID']);
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
