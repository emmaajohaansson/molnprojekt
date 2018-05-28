<?php

namespace App\Http\Controllers;

//use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Auth;

class GamesController extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
      $results = app('db')->select("SELECT * FROM games");
      return view('games', ['result' => $results]);
    }

    public function get($id) {
      $results = app('db')->select("SELECT * FROM games WHERE games.id = $id");
      return view('gamesDetails', ['result' => $results]);
    }

    public function delete($id) {
      app('db')->delete("DELETE FROM reviews WHERE reviews.gameId = $id");
      app('db')->delete("DELETE FROM games WHERE games.id = $id");
    }

    public function getOwned(){
      $id = Auth::user()->id;
      $results = app('db')->select("SELECT * FROM games WHERE games.ownerId = $id");
      return view('games', ['result' => $results]);
    }
}
