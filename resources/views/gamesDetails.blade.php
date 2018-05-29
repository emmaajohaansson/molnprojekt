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
      Added at: <?php echo $game->createdAt; ?>
    </div>
  </div>
  <ul class="list-group list-group-flush col-6 offset-3">
    <h4 class="p-3 mt-2 text-center">Reviews</h4>
    <p class="text-center">Add your own review of this game!</p>
    <form>
  <div class="form-group">
    <label for="rating">Rating</label>
    <select id="rating" class="form-control form-control-lg col-sm-1">
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
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    @foreach ($game->reviews as $review)
    <li class="list-group-item">{{$review->review}} - {{$review->createdAt}}</li>
    @endforeach
  </ul>
  <?php endforeach; ?>
</div>

@endsection
