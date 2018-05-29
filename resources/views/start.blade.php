<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.layout')

@section('title', 'Start')

@section('content')
<div class="row">
  <div class="m-0 p-0 card text-white m-0 p-0 text-center text-light rounded-0 width-100">
    <img class="m-0 p-0 rounded-0 card-img" style="filter: blur(5px) brightness(0.70)" src="https://i.pinimg.com/originals/2a/83/03/2a8303314ac11ecadf65d6e0d0f2a1aa.jpg" alt="Card image">
    <div class="card-img-overlay">
      <h1 class="display-4 font-weight-superlight">GAMELINK.SE</h1>
      <img class="invert width-50" src="/img/icon.png" />
      <p class="card-text">This site is for made for keeping track of your games and what game to buy or try next.<br />You can see other people reviews and save your games and write your own reviews.</p>

      <a class="btn3d btn btn-primary btn-lg font-weight-superlight text-uppercase letterspace-2" href="/games" role="button">All Games</a>
      <a class="btn3d btn btn-primary btn-lg font-weight-superlight text-uppercase letterspace-2" href="/myprofile" role="button">My Profile</a>
    </div>
  </div>
</div>
@endsection
