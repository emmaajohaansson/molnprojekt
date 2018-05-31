<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.layout')

@section('title', 'Details')

@section('content')

<div class="row py-3 ">
  @forelse ($result as $game)
  <div class="col-12 col-md-5">
    <img class="img-fluid" src='{{$game->image}}'/>
  </div>
  <div class="col-12 col-md-7">
    <h1 class="font-weight-light">{{$game->name}}</h1>
    <p class="break-all"><?php echo $game->description; ?></p>
  </div>
  <div class="text-muted text-center col-12 py-2">
    @auth
      @if (Auth::user()->id === $game->ownerId)
      <div class="d-flex justify-content-around justify-content-md-center py-2">
        <button class="btn btn-primary" id="editgame{{$game->id}}" data-toggle="modal" data-target="#editGameModal" data-gametitle="{{ $game->name }}" data-gamedescription="{{ $game->description }}" data-gameprice="{{ $game->price }}" data-gameid="{{ $game->id }}" >
          <i class="fal fa-pen"></i> Edit Game
        </button>
        <a class="btn btn-danger" href="/api/games/{{$game->id}}"
           onclick="event.preventDefault(); document.getElementById('deletegame-form').submit();">
            {{ __('Delete game') }}
        </a>
      </div>
      <form id="deletegame-form" action="/api/games/{{$game->id}}" method="POST" style="display: none;">
        {{ method_field('DELETE') }}
          @csrf
      </form>
      @endif
    @endauth
    Added at: <?php echo $game->createdAt; ?>
    <hr/>
  </div>
  </div>
  <div class="row col-12">
  <ul class="list-group-flush col-12 offset-0 col-md-8 offset-md-2 mt-2">
    <h1 class="py-3 text-center">Reviews</h1>

    @auth
    <p class="text-center">Add your own review of this game!</p>
    <form action=<?php echo "/api/reviews/" . $game->id ?> method="POST" id="addReviewForm">
        @csrf
  <div class="form-group">
    <label for="rating">Rating</label>
    <select id="rating" name="rating" class="form-control form-control-lg col-12">
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
      <div class="col-12">
        <h4 class="font-weight-light">{{$review->username}}</h4>
        <h3>{{$review->review}}</h3>
        <h4 class="font-weight-light">
        <span class="fa-layers fa-fw">
          <?php for ($x = 1; $x <= $review->rating; $x++) {echo '<i class="fal fa-star"></i>';}?>
        </span>
        </h4>
        <p>{{$review->createdAt}}</p>
      </div>

      @auth
        @if (Auth::user()->id === $review->userId)
          <div class="d-flex justify-content-around justify-content-md-start py-2">
            <div class="col-6 col-md-auto">
              <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editReviewModal" data-gameid="{{$review->gameId}}" data-reviewcomment="{{$review->review}}" data-gamename="{{$review->name}}" data-reviewrating="{{$review->rating}}" data-reviewid="{{$review->reviewId}}">
                <i class="fal fa-pen"></i> Edit Review
              </button>
            </div>
            <form class="col-6 col-md-auto" id="deletereview-form{{$review->reviewId}}" action=<?php echo "/api/reviews/" . $review->reviewId . "/" . $review->gameId ?> method="POST">
              {{ method_field('DELETE') }}
                @csrf
                <input type="submit" class="btn btn-danger btn-sm" value="Delete Review" id="deletereview{{$review->reviewId}}">
            </form>
          </div>
        @endif
      @endauth
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
              <select id="reviewratingUpdate" name="rating" class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
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
          <form action="" method="POST" id="gameIdUpdate">
            {{ method_field('PUT') }}
            @csrf
            <div class="form-group">
              <label for="gameTitleUpdate" class="col-form-label">Game Title:</label>
              <input value="" type="text" name="title" class="form-control" id="gameTitleUpdate">
            </div>
            <div class="form-group">
              <label for="gamePriceUpdate" class="col-form-label">Game Price:</label>
              <input value="" type="number" name="price" class="form-control" id="gamePriceUpdate">
            </div>
            <div class="form-group">
              <label for="gameDescriptionUpdate" class="col-form-label">Game Description:</label>
              <textarea class="form-control" name="description" id="gameDescriptionUpdate"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a class="btn btn-success btn-md" href="/savegame" id="saveGameUpdate"
            onclick="event.preventDefault();document.getElementById('gameIdUpdate').submit();">
            Save
          </a>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection
