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
      <ul id="addgamelist" class="list-group list-group-flush text-left">
        <a class="btn btn-success text-light m-2">Add game</a>
      </ul>
    </div>
  </div>
</div>
@endsection
