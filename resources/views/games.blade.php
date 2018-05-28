<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.layout')

@section('title', 'All games')

@section('content')

<div class="row p-3">
  <div class="card-columns">
      <?php foreach ($result as &$game): ?>
    <div class="card text-white bg-dark">
      <img class="card-img-top" src= <?php echo $game->image; ?> alt="Game image">
      <div class="card-body">
        <a href=<?php echo "/games/",  $game->id; ?>><h5 class="card-title"><?php echo $game->name; ?></h5></a>
        <p class="card-text"><?php echo $game->description; ?></p>
        <p class="card-text"><small class="text-muted">Released at: <?php echo $game->createdAt; ?></small></p>
      </div>
    </div>
  <?php endforeach; ?>

  </div>
</div>

@endsection
