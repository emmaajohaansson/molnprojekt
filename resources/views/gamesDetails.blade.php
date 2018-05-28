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
    <img class="card-img-top mw-300" src="https://www.hiphomeschoolmoms.com/wp-content/uploads/2011/07/250x250-sample-215x161.png" alt="Game image">
    <div class="card-body">
      <h5 class="card-title display-4"><?php echo $game->name; ?></h5>
      <p class="card-text"><?php echo $game->description; ?></p>
      <a href="/games" class="btn btn-primary">All Games</a>
      <a href="#" class="btn btn-primary">Do something</a>
    </div>
    <div class="card-footer text-muted">
      Released at: <?php echo $game->createdAt; ?>
    </div>
  </div>
  <ul class="list-group list-group-flush col-6 offset-3">
    <h4 class="p-3 mt-2 text-center">Reviews</h4>
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Morbi leo risus</li>
    <li class="list-group-item">Porta ac consectetur ac</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
  <?php endforeach; ?>
</div>

@endsection
