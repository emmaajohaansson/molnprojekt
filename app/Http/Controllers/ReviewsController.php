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

class ReviewsController extends BaseController
{
    public function get($id) {
      $results = app('db')->select("SELECT reviews.reviewId, reviews.rating, reviews.review, reviews.createdAt, users.username FROM reviews INNER JOIN users ON reviews.userId = users.id WHERE reviews.gameId = $id ");
      return $results;
    }

    public function delete($id) {
      app('db')->delete("DELETE FROM reviews WHERE reviews.reviewId = $id");
    }

    public function add($id, Request $request) {
      $rating = $request->input("rating");
      $comment = $request->input("comment");
      $userId = Auth::id();
      $gameId = $id;
      app('db')->insert("INSERT INTO `reviews`(`review`, `rating`, `userId`, `gameId`) VALUES ('$comment', $rating, $userId, $gameId)");
      return redirect('/games/'.$id);
    }

}
