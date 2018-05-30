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
      Added at: <?php echo $game->createdAt; ?>
      <hr/>
    </div>
  </div>
  <ul class="list-group list-group-flush col-6 offset-3">
    <h4 class="p-3 mt-2 text-center">Reviews</h4>

    @auth
    <p class="text-center">Add your own review of this game!</p>
    <form action=<?php echo "/api/reviews/" . $game->id ?> method="POST" id="addReviewForm">
        @csrf
  <div class="form-group">
    <label for="rating">Rating</label>
    <select id="rating" name="rating" class="form-control form-control-lg col-sm-1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="reviewComment">Comment</label>
        <textarea rows="6" id="reviewComment" type="text" class="form-control" name="comment" required></textarea>
  </div>
  <a class="btn btn-primary" href=<?php echo "/api/reviews/" . $game->id ?>
     onclick="event.preventDefault();
                   document.getElementById('addReviewForm').submit();">
      {{ __('Submit Review') }}
  </a>
</form>
@endauth

    @foreach ($game->reviews as $review)
    <li class="list-group-item d-flex justify-content-between align-items-center pt-3 pb-0">
      <div>
        <p>{{$review->review}}</p>
        <p>{{$review->createdAt}}</p>
        <p>{{$review->username}}</p>
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
