<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.layout')

@section('title', 'All games')

@section('content')

<div class="row p-3">
  <?php foreach ($result as &$game): ?>
  <div class="card text-center col-12">
    <div class="card-header">
      <?php echo $game->name; ?>
    </div>
    <img class="card-img-top mw-300" src=<?php echo $game->image; ?> alt="Game image">
    <div class="card-body">
      <h5 class="card-title display-4"><?php echo $game->name; ?></h5>
      <p class="card-text"><?php echo $game->description; ?></p>
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
    <div class="card-footer text-muted">
      Released at: <?php echo $game->createdAt; ?>
    </div>
  </div>
  <ul class="list-group list-group-flush col-6 offset-3">
    <h4 class="p-3 mt-2 text-center">Reviews</h4>
    @foreach ($game->reviews as $review)
    <li class="list-group-item">{{$review->review}} - {{$review->createdAt}}</li>
    @endforeach
  </ul>
  <?php endforeach; ?>
</div>

@endsection
