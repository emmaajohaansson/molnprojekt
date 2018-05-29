<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.layout')

@section('title', 'Start')

@section('content')
<div class="row">
  <div class="jumbotron m-0 text-center bg-verydark text-light rounded-0 width-100">
    <h1 class="display-4 font-weight-superlight">GAMELINK.SE</h1>
    <img src="/img/icon.png" class="invert width-50" />
    <p class="lead">This site is for made for keeping track of your games and what game to buy or try next. You can see other people reviews and save your games and write your own reviews.</p>
    <hr class="my-4">
    <a class="btn3d btn btn-primary btn-lg" href="/games" role="button">All Games</a>
    <a class="btn3d btn btn-primary btn-lg" href="/games" role="button">My Games</a>
  </div>
</div>
@endsection
