<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.layout')

@section('title', 'All games')

@section('content')


<div class="row p-3">
  <div class="card-columns">
    <?php
    for ($x = 0; $x <= 10; $x++) {
    echo '<div class="card text-white bg-dark">
      <img class="card-img-top" src="https://www.hiphomeschoolmoms.com/wp-content/uploads/2011/07/250x250-sample-215x161.png" alt="Game image">
      <div class="card-body">
        <h5 class="card-title">Game title</h5>
        <p class="card-text">This game has supporting lorem below as a natural ipsum to additional lorem.</p>
        <p class="card-text"><small class="text-muted">Added 3 mins ago</small></p>
      </div>
    </div>';

    }
    ?>
  </div>
</div>

@endsection
