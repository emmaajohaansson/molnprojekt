<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.layout')

@section('title', 'Start')

@section('content')
<div class="row height-100 subtract-header pt-4">
  <div class="bg-cover-center bg-image-1 m-0 pt-4 text-white text-center text-light height-100 width-100">
    <!--img class="m-0 p-0 rounded-0 card-img" style="filter: blur(5px) brightness(0.70)" src="https://i.pinimg.com/originals/2a/83/03/2a8303314ac11ecadf65d6e0d0f2a1aa.jpg" alt="Card image"-->
    <div class="bg-black-50 p-4 height-100 font-weight-superlight">
      <h1 class="display-4 font-weight-superlight">GAMELINKISFREAKINGAMAZING!</h1>
      <h4 class="display-4 font-weight-superlight"><i class="fal fa-gamepad"></i> + <i class="fal fa-link"></i></h4>
      <p class="card-text p-3 font-weight-light">This site is for made for keeping track of your games and what game to buy or try next.
        <br />You can see other people reviews and save your games and write your own reviews.
        <br />Freakin' fantastic!
      </p>

      <a class="btn btn-primary btn-lg font-weight-superlight text-uppercase letterspace-2" href="/games" role="button">
        <i class="fal fa-gamepad"></i> All Games
      </a>
    </div>
  </div>
</div>
@endsection
