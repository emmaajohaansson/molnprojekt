<!-- Stored in resources/views/user.blade.php -->

@extends('layouts.layout')
@section('title', 'Profile')

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
        <a class="btn btn-dark btn-sm trans-size-80" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('deleteProfile-form').submit();">
          {{ __('Delete Account') }}</a>
      </div>
    </div>
    <a class="btn btn-sm btn-danger m-2" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
    <a class="btn btn-sm btn-info m-2" href="{{ route('logout') }}"
       onclick="event.preventDefault(); document.getElementById('updateProfile-form').submit();">
        {{ __('Update') }}
    </a>
  </div>
  <!-- SPLIT -->
  <!-- SPLIT -->
  <!-- SPLIT -->
  <div class="col-12 col-md-6 text-center my-3">
    <div class="py-2">
      <h4 class="text-uppercase font-weight-superlight">
        Add Game
      </h4>
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
<div class="row">
  <div class="py-3 col-12">
    <h4 class="text-uppercase text-center font-weight-superlight">
        Created Games
    </h4>
    <ul class="list-group list-group-flush text-left">
      <li class="list-group-item d-flex justify-content-between align-items-center">
        <p class="col-3">Game One <span class="game"></span></p>
        <p class="col-7 font-size-50 text-left overflow-hide">
          Game Description Game Description Game Description Game Description Game Description Game Description
          Game Description Game Description Game Description Game Description Game Description Game Description</p>
        <div class="col-2">
          <a href="#" class="btn btn-primary btn" data-toggle="modal" data-target="#editGameModal">
            <i class="fal fa-pen"></i>
          </a>
          <a href="#" class="btn btn-danger btn">
            <i class="fal fa-ban"></i>
          </a>
        </div>
      </li>
    </ul>
  </div>
  <div class="modal fade" id="editGameModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Game</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="gameTitleUpdate" class="col-form-label">Game Title:</label>
              <input value="{gameTitle}" type="text" class="form-control" id="gameTitleUpdate">
            </div>
            <div class="form-group">
              <label for="gameDescriptionUpdate" class="col-form-label">Game Description:</label>
              <textarea class="form-control" id="gameDescriptionUpdate">{gameDescription}</textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
