<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class GamesController extends BaseController
{
    public function index() {
      $results = app('db')->select("SELECT * FROM games");
      return $results;
    }

    public function get($id) {
      $results = app('db')->select("SELECT * FROM games WHERE games.id = $id");
      return $results;
    }

    public function delete($id) {
      app('db')->delete("DELETE FROM reviews WHERE reviews.gameId = $id");
      app('db')->delete("DELETE FROM games WHERE games.id = $id");
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
