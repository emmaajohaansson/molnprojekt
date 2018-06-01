<?php

namespace App\Http\Controllers;

//use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Auth;

class GamesController extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    public function index() {
      $results = DB::select('select * from games');
      return view('games', ['result' => $results]);
    }

    public function get($id) {
      $games = DB::select('select * from games where games.id = ?', [$id]);
      $reviews = DB::select('SELECT reviews.reviewId, games.name, reviews.userId, reviews.gameId, reviews.rating, reviews.review, reviews.createdAt, users.username FROM reviews INNER JOIN users ON reviews.userId = users.id INNER JOIN games on reviews.gameId = games.id WHERE reviews.gameId = ? ', [$id]);
      $games[0]->reviews = [];
      $games[0]->reviews = $reviews;
      return view('gamesDetails', ['result' => $games]);
    }

    public function delete($id) {
      DB::delete('DELETE FROM reviews WHERE reviews.gameId = ?', [$id]);
      DB::delete('DELETE FROM games WHERE games.id = ?', [$id]);
      //return view('start');
      return redirect('/myprofile');
    }

    public function add(Request $request) {

      $this->middleware("auth");
      $gameName = $request->input("title");
      $gameDesc = $request->input("description");
      $gamePrice = $request->input("price");
      $gameImage = $request->input("image");
      $gameOwner = Auth::user()->id;
      
      DB::insert('insert into games (name, description, price, ownerId, image) values (?, ?, ?, ?, ?)', [$gameName, $gameDesc, $gamePrice, $gameOwner, $gameImage]);
      return redirect("/myprofile");
    }

    public function update($id ,Request $request) {
      $title = $request->input("title");
      $description = $request->input("description");
      $price = $request->input("price");

      DB::table("games")
              ->where("id", $id)
              ->update(["name" => $title, "description" => $description, "price"=> $price]);

      return redirect('/myprofile');
    }


    public function getOwned(){
      $id = Auth::user()->id;
      $results = DB::select('SELECT * FROM games WHERE games.ownerId = ?', [$id]);
      return view('profile', ['result' => $results]);
    }
}
