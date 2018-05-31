<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.layout')

@section('title', 'Details')

@section('content')

<div class="row p-3">
  @forelse ($result as $game)
  <div class="col-12 col-md-5">
    <img class="img-fluid" src={{$game->image}}
  </div>
  <div class="col-12 col-md-7">
    <p class="display-4">{{$game->name}}</p>
    <p><?php echo $game->description; ?></p>
    @auth
      @if (Auth::user()->id === $game->ownerId)
      <a href="/games" class="btn btn-primary">Redigera Spel</a>
      <a class="btn btn-danger" href="/api/games/{{$game->id}}"
         onclick="event.preventDefault();
                       document.getElementById('deletegame-form').submit();">
          {{ __('Delete game') }}
      </a>

      <form id="deletegame-form" action="/api/games/{{$game->id}}" method="POST" style="display: none;">
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
  <input type="submit" value="Submit Review" class="btn btn-primary btn-sm mb-2">
</form>
@endauth
    @forelse ($game->reviews as $review)
    <li class="list-group-item d-flex justify-content-between align-items-center pt-3 pb-0">
      <div>
        <p>{{$review->review}}</p>
        <p>{{$review->createdAt}}</p>
        <p>{{$review->username}}</p>
      </div>
      <div class="bg-dark p-2 text-light rounded">
        Rating <span class="badge badge-light">{{$review->rating}}</span>
      </div>
      @auth
        @if (Auth::user()->id === $review->userId)
        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editReviewModal" data-gameid="{{$review->gameId}}" data-reviewcomment="{{$review->review}}" data-gamename="{{$review->name}}" data-reviewrating="{{$review->rating}}" data-reviewid="{{$review->reviewId}}">
          <i class="fal fa-pen"></i>
        </button>
        <form id="deletereview-form{{$review->reviewId}}" action=<?php echo "/api/reviews/" . $review->reviewId . "/" . $review->gameId ?> method="POST">
          {{ method_field('DELETE') }}
            @csrf
            <input type="submit" class="btn btn-danger btn-sm" value="Delete Review" id="deletereview{{$review->reviewId}}">
        </form>
        @endif
      @endauth
    </li>
    @empty
    <h1 class="text-center col-12 font-weight-light text-uppercase">No Reviews</h1>
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
      <input type="submit" value="Submit Review" class="btn btn-primary btn-sm mb-2">
    </form>
    @endforelse
  </ul>
@empty
<h1 class="text-center col-12 font-weight-light text-uppercase">Something</h1>
@endforelse
  <!-- A MODAL (ALERT-LOOKING THING) FOR EDITING Reviews DETAILS STARTS HERE -->
  <!-- A MODAL (ALERT-LOOKING THING) FOR EDITING Reviews DETAILS STARTS HERE -->
  <!-- A MODAL (ALERT-LOOKING THING) FOR EDITING Reviews DETAILS STARTS HERE -->
  <div class="modal fade" id="editReviewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-superlight" id="exampleModalLabel">Edit review for <span class="printGameTitle" id="gameName">Name</span></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="POST" id="gameReviewUpdate">
            {{ method_field('PUT') }}
            @csrf
            <div class="form-group">
              <label for="gameTitleUpdate" class="col-form-label">Review Comment:</label>
              <input value="Something went wrong" type="text" name="review" class="form-control" id="reviewCommentUpdate">
            </div>
            <div class="form-group">
              <label for="gamePriceUpdate" class="col-form-label">Review Rating:</label>
              <input value="Something went wrong" type="number" name="rating" class="form-control" id="reviewratingUpdate">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a class="btn btn-success btn-md" href="/api/reviews/update"
            onclick="event.preventDefault();document.getElementById('gameReviewUpdate').submit();">
            Save
          </a>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection
