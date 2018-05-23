<?php

namespace App\Http\Controllers;

//use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ReviewsController extends BaseController
{
    public function get($id) {
      $results = app('db')->select("SELECT * FROM reviews WHERE gameId = $id");
      return $results;
    }

    public function delete($id) {
      app('db')->delete("DELETE FROM reviews WHERE reviews.reviewId = $id");
    }

    public function login() {

    }

    public function forgotPassword() {

    }

    public function getUserInfo() {

    }

    public function listGames() {

    }

    public function addGame() {

    }

    public function updateGame() {

    }

    public function removeGame() {

    }

    public function getReview() {

    }

    public function addReview() {

    }

    public function updateReview() {

    }

    public function deleteReview() {

    }
}
