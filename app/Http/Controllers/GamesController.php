<?php

namespace App\Http\Controllers;

//use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

use Auth;

class GamesController extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    public function index() {
      $results = app('db')->select("SELECT * FROM games");
      return view('games', ['result' => $results]);
    }

    public function get($id) {
      $games = app('db')->select("SELECT * FROM games WHERE games.id = $id");
      $reviews = app('db')->select("SELECT * FROM reviews WHERE gameId = $id");
      $games[0]->reviews = $reviews;
      return view('gamesDetails', ['result' => $games]);
    }

    public function delete($id) {
      app('db')->delete("DELETE FROM reviews WHERE reviews.gameId = $id");
      app('db')->delete("DELETE FROM games WHERE games.id = $id");
      //return view('start');
      return redirect('/myprofile');
    }

    public function add(Request $request) {

      $this->middleware("auth");
      $gameName = $request->input("title");
      $gameDesc = $request->input("description");
      $gamePrice = 500;
      $gameImage = "https://c.s-microsoft.com/en-in/CMSImages/Windows_GamesE3_Hero_SeaOfThieves_1920.jpg?version=a7a0db86-c3f8-9fcd-08da-4f4c148ad2cf";
      $gameOwner = Auth::user()->id;

      app('db')->insert("INSERT INTO `games`(`name`, `description`, `price`, `ownerId`, `image`) VALUES ('$gameName', '$gameDesc', $gamePrice, $gameOwner, '$gameImage')");
      return redirect("/myprofile");
    }


    public function getOwned(){
      $id = Auth::user()->id;
      $results = app('db')->select("SELECT * FROM games WHERE games.ownerId = $id");
      return view('profile', ['result' => $results]);
    }
}
