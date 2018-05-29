<!-- Stored in resources/views/user.blade.php -->

@extends('layouts.layout')

@section('title', 'Page Title')

@section('content')
<div class="row">
  <div class="card col-6 text-center my-3">
    <div class="card-body">
      <h4 class="display-4 font-size-200 text-uppercase font-weight-superlight">
          {{ Auth::user()->username }}
      </h4>
      <ul class="list-group list-group-flush text-left">
        <li class="list-group-item">Your id: {{ Auth::user()->id }}</li>
        <li class="list-group-item">Amount of games: {{ Auth::user()->id }}</li>
        <li class="list-group-item">Amount of reviews: {{ Auth::user()->id }}</li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          If you really want to, then you can
          <a class="btn btn-dark btn-sm" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              {{ __('Delete Account') }}</a>
        </li>
      </ul>
      <a class="btn btn-danger m-2" href="{{ route('logout') }}"
         onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
      </a>
    </div>
  </div>
  <div class="card col-6 text-center my-3">
    <div class="card-body">
      <h4 class="display-4 font-size-200 text-uppercase font-weight-superlight">
          Dina spel
      </h4>
      <ul class="list-group list-group-flush text-left">
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Game One
          <a href="#deleteGame" class="btn btn-danger btn-lg">
            <i class="fal fa-trash-alt"></i>
          </a>
        </li>
      </ul>
      <div class="py-5">
        <h4 class="font-weight-superlight">Add Game</h4>
        <form>
          <div class="form-group text-left">
            <label for="gameTitle">Game Title</label>
            <input type="title" class="form-control form-control-sm" id="gameTitle" aria-describedby="nameofgame" placeholder="Game title">
          </div>
          <div class="form-group text-left">
            <label for="gameDescription">Description</label>
            <input type="text" class="form-control form-control-sm" id="gameDescription" placeholder="Game Description">
          </div>
          <div class="form-check text-left">
            <input type="checkbox" class="form-check-input" id="iOwnThis">
            <label class="form-check-label" for="iOwnThis">I own this game</label>
          </div>
          <button type="submit" class="btn btn-sm btn-primary">Add game</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
