<!-- Stored in resources/views/user.blade.php -->

@extends('layouts.layout')

@section('title', 'Page Title')

@section('content')
<div class="row">
  <div class="col-12 col-md-6 text-center p-3">
    <h4 class="text-uppercase font-weight-superlight">Profile</h4>
    <div class="input-group input-group-sm my-3">
      <div class="input-group-prepend col-4">
        <span class="input-group-text col-12" id="username">Username</span>
      </div>
      <input class="form-control text-uppercase font-weight-superlight col-8" value="{{ Auth::user()->username }}">
    </div>
    <div class="input-group input-group-sm mb-3">
      <div class="input-group-prepend col-4 ml-0">
        <span class="input-group-text col-12" id="password">Password</span>
      </div>
      <input class="form-control text-uppercase font-weight-superlight" value="New Password">
    </div>
    <div class="input-group input-group-sm mb-3">
      <div class="input-group-prepend col-4">
        <span class="input-group-text col-12" id="userId">User Id</span>
      </div>
      <input class="form-control text-center col-8" type="text" placeholder="{{ Auth::user()->id }}" readonly>
    </div>
    <div class="input-group input-group-sm mb-3">
      <div class="input-group-prepend col-4">
        <span class="input-group-text col-12" id="deleteUser">Delete <br />account</span>
      </div>
      <div class="form-control d-flex justify-content-between align-items-center col-8">
        <small>If you really want to, then you can</small>
        <a class="btn btn-dark btn-sm trans-size-80" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          {{ __('Delete Account') }}</a>
      </div>
    </div>
    <a class="btn btn-danger m-2" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
    <a class="btn btn-info m-2" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        {{ __('Update') }}
    </a>
  </div>
  <!-- SPLIT -->
  <!-- SPLIT -->
  <!-- SPLIT -->
  <div class="card col-12 col-md-6 text-center my-3">
    <div class="card-body">
      <h4 class="text-uppercase font-weight-superlight">
          Created Games
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
        <h4 class="text-uppercase font-weight-superlight">Add Game</h4>
        <form>
          <div class="form-group input-group mb-3 text-left">
            <div class="input-group-prepend">
              <span class="input-group-text" id="gameTitle">Game Title</span>
            </div>
            <input type="title" class="form-control form-control-sm" id="basic-url" aria-describedby="nameOfGame">
          </div>
          <div class="form-group input-group text-left">
            <div class="input-group-prepend">
              <span class="input-group-text">Game <br />Description</span>
            </div>
            <textarea type="text" class="form-control form-control-sm" aria-label="With textarea" id="gameDescription" rows="3"></textarea>
          </div>
          <div class="form-check mb-3">
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
