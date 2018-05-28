<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.layout')

@section('title', 'Start')

@section('content')
<div class="row">
  <div class="jumbotron text-center bg-dark text-light rounded-0 width-100">
    <h1 class="display-4 font-weight-light">GAMELINKS.SE</h1>
    <img src="/img/icon.png" class="width-50" />
    <p class="lead">This site is for made for keeping track of your games and what game to buy or try next. You can see other people reviews and save your games and write your own reviews.</p>
    <hr class="my-4">
    <a class="btn3d btn btn-primary btn-lg" href="/games" role="button">Games</a>
    <a class="btn3d btn btn-primary btn-lg" href="/api/users" role="button">User</a>
    <a class="btn3d btn btn-primary btn-lg" href="/api/reviews" role="button">Reviews</a>
  </div>
</div>
@endsection
