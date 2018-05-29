<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.layout')

@section('title', 'Details')

@section('content')

<div class="row p-3">
  <?php foreach ($result as &$game): ?>
  <div class="col-5">
    <img class="img-fluid" src=<?php echo $game->image; ?> alt="Game image">
  </div>
  <div class="col-5">
    <p class="display-4"><?php echo $game->name; ?></p>
    <p><?php echo $game->description; ?></p>
    @auth
      @if (Auth::user()->id === $game->ownerId)
      <a href="/games" class="btn btn-primary">Redigera Spel</a>
      <a class="btn btn-danger" href=<?php echo "/api/games/" . $game->id ?>
         onclick="event.preventDefault();
                       document.getElementById('deletegame-form').submit();">
          {{ __('Delete game') }}
      </a>

      <form id="deletegame-form" action=<?php echo "/api/games/" . $game->id ?> method="POST" style="display: none;">
        {{ method_field('DELETE') }}
          @csrf
      </form>
      @endif
    @endauth

  </div>
  <div class="text-muted text-center col-12 p-3">
    Released at: <?php echo $game->createdAt; ?>
    <hr />
  </div>
  <ul class="list-group list-group-flush col-12 mb-4">
    <h4 class="p-2 mt-2 text-center text-uppercase display-4 font-size-200">Reviews</h4>
    @foreach ($game->reviews as $review)
    <li class="list-group-item d-flex justify-content-between align-items-center pt-3 pb-0">
      <div>
        <p>{{$review->review}}</p>
        <p>{{$review->createdAt}}</p>
      </div>
      <div class="bg-dark p-2 text-light rounded">
        Rating <span class="badge badge-light">{{$review->reviewId}}</span>
      </div>
    </li>
    @endforeach
  </ul>
  <?php endforeach; ?>
</div>

@endsection
