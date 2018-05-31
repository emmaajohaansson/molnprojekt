<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.layout')

@section('title', 'All Games')

@section('content')
<div class="row p-3">
    @forelse ($result as $game)
    <div class="col-4 my-3">
      <div class="card text-white bg-dark">
        <img class="card-img-top" src=<?php echo $game->image; ?> alt="Game image">
        <div class="card-body">
          <a href=<?php echo "/games/",  $game->id; ?>><h5 class="card-title"><?php echo $game->name; ?></h5></a>
          <p class="card-text"><?php echo $game->description; ?></p>
          <p class="card-text"><small class="text-muted">Released at: <?php echo $game->createdAt; ?></small></p>
        </div>
      </div>
    </div>
  @empty
  <h1 class="text-center col-12 font-weight-light text-uppercase">No games</h1>
  <a class="btn btn-lg btn-primary mx-auto font-weight-light text-uppercase" href="/myprofile">
    <i class="fal fa-plus"></i> Add new games <i class="fal fa-gamepad"></i>
  </a>
  @endforelse
</div>

@endsection
