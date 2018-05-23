<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.layout')

@section('title', 'All games')

@section('content')
<div class="row p-3">
  <div class="card-columns">
    <!--div class="card p-3">
      <img class="card-img-top" src="https://www.hiphomeschoolmoms.com/wp-content/uploads/2011/07/250x250-sample-215x161.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title that wraps to a new line</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
    <div class="card text-light">
      <img class="card-img" src="https://www.hiphomeschoolmoms.com/wp-content/uploads/2011/07/250x250-sample-215x161.png" alt="Card image">
      <div class="card-img-overlay bg-dark-50">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text">Last updated 3 mins ago</p>
      </div>
    </div-->
    <div class="card text-white bg-dark">
      <img class="card-img-top" src="https://www.hiphomeschoolmoms.com/wp-content/uploads/2011/07/250x250-sample-215x161.png" alt="Game image">
      <div class="card-body">
        <h5 class="card-title">Game title</h5>
        <p class="card-text">This game has supporting lorem below as a natural ipsum to additional lorem.</p>
        <p class="card-text"><small class="text-muted">Added 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
@endsection
