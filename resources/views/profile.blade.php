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
      <input class="form-control text-center col-8" type="text" placeholder="{{ Auth::user()->id }}" readonly disabled>
    </div>
    <div class="input-group input-group-sm mb-3">
      <div class="input-group-prepend col-4">
        <span class="input-group-text col-12" id="deleteUser">Delete <br />account</span>
      </div>
      <div class="form-control d-flex justify-content-between align-items-center col-8">
        <small>If you really want to, then you can</small>
        <a class="btn btn-dark btn-sm trans-size-80" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('deleteProfile-form').submit();">
          {{ __('Delete Account') }}</a>
          <!--THIS BUTTON NEEDS A ROUTE FOR REMOVING ALL ACCOUNT DETAILS-->
      </div>
    </div>
    <a class="btn btn-sm btn-info m-2" href="{{ route('logout') }}"
       onclick="event.preventDefault(); document.getElementById('updateProfile-form').submit();">
        {{ __('Update') }}
        <!--THIS BUTTON NEEDS A ROUTE FOR UPDATING ACCOUNT DETAILS-->
    </a>
  </div>
  <!-- PROFILE FORM ENDS HERE -->
  <!-- SPLIT -->
  <!-- ADD NEW GAMES FORM STARTS HERE -->
  <div class="col-12 col-md-6 text-center p-3">
    <h4 class="text-uppercase font-weight-superlight">Add Game</h4>
    <div class="">
      <form>
        <div class="form-group input-group my-3 text-left">
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
<!-- ADD NEW GAMES FORM ENDS HERE -->
<!-- SPLIT -->
<!-- THE GAMES THAT IS ALREADY CREATED -->
<div class="row">
  <div class="py-3 col-12">
    <h4 class="text-uppercase text-center font-weight-superlight">
        Created Games
    </h4>
    <ul class="list-group list-group-flush text-left">
      @foreach ($result as $game)
      <li class="list-group-item d-flex justify-content-between align-items-center">
        <p class="col-3"> {{ $game->name }} <span class="game"></span></p>
        <p class="col-7 font-size-50 text-left overflow-hide">
          {{ $game->description }}
        </p>
        <div class="col-2">
          @auth
            @if (Auth::user()->id === $game->ownerId)
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editGameModal" data-gametitle="<?php echo $game->name ?>" data-gamedescription="<?php echo $game->description ?>">
              <i class="fal fa-edit"></i>
            </button>
            <a class="btn btn-danger btn-sm" href=<?php echo "/api/games/" . $game->id ?>
              onclick="event.preventDefault();document.getElementById('deletegame-form').submit();">
              <i class="fal fa-ban"></i>
            </a>
            <form id="deletegame-form" action=<?php echo "/api/games/" . $game->id ?> method="POST" style="display: none;">
              {{ method_field('DELETE') }}
                @csrf
            </form>
            @endif
          @endauth
        </div>
      </li>
      @endforeach

    </ul>
  </div>
  <!-- THE GAMES THAT IS ALREADY CREATED -->
  <!-- SPLIT -->
  <!-- A MODAL (ALERT-LOOKING THING) FOR EDITING GAME DETAILS STARTS HERE -->
  <div class="modal fade" id="editGameModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-superlight" id="exampleModalLabel">Edit <span class="printGameTitle">Name</span></h5>
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
