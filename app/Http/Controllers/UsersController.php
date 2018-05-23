<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

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
