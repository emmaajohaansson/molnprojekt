<?php

namespace App\Http\Controllers;

//use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Auth;

use Log;
class UsersController extends BaseController
{

  public function index() {
    $results = DB::select('select * from users');
    return $results;
  }


    public function get($id) {
      $results = DB::select('select * from users where id = ?', [$id]);
      return $results;
    }

    public function delete($id) {
      DB::delete('DELETE FROM reviews WHERE reviews.userId = ?', [$id]);
      
      $results = DB::select('select * from games where ownerId = ?', [$id]);
      
      foreach ($results as $game) {
          DB::delete('DELETE FROM reviews WHERE reviews.gameId = ?', [$id]);
      }
      DB::delete('DELETE FROM games WHERE games.ownerId = ?', [$id]);
      DB::delete('DELETE FROM users WHERE users.id = ?', [$id]);
      return redirect('/');
    }

    public function add(Request $request) {
      $username = $request->input("username");
      $password = $request->input("password");
      $credits = 500;
      DB::insert('insert into users (username, password, credit) values (?, ?, ?)', [$username, $password, $credits]);
    }

    public function update(Request $request) {
      $username = $request->input("username");
      $password = $request->input("password");
      $credits = 500;
      DB::table("users")
              ->where("id", Auth::id())
              ->update(["username" => $username, "password" => Hash::make($password)]);
      return redirect('/myprofile');
    }

}
