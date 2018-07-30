@extends('layouts.app')

@section('content')
<!--=================== Start Part1 3 images =========================-->
<div class="row" id="container-img">
	<div class="d-flex justify-content-center py-img">
		<div id="container-img2">
		  	<img src="{{ asset('Assets/spitaltopmed1.jpg')}}" class="img-responsive" alt="Spital">
  			<div class="overlay" id="overlay1">
   			<div class="centered2">Spital</div>
  		</div>
		</div>
		<div id="container-img2">
  			<img src="{{ asset('Assets/analize.jpg')}}" class="img-responsive" alt="analize">
  			<div class="overlay" id="overlay1">
   			<div class="centered2">Analize</div>
  		</div>
		</div>
		<div id="container-img2">
  			<img src="{{ asset('Assets/imagistica.png')}}" class="img-responsive" alt="imagistica">
  			<div class="overlay" id="overlay1">
   			<div class="centered2">Imagistica</div>
  		</div>
		</div>
		</div>

	</div>
</div>
<!--==================== End Part1 3 images ==========================-->

<!--=================== Start Part2 carousel =========================-->

<div class="container" id="container-carousel">
<div id="carousel-add" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-add" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-add" data-slide-to="1"></li>
    <li data-target="#carousel-add" data-slide-to="2"></li>
    <li data-target="#carousel-add" data-slide-to="3"></li>
    <li data-target="#carousel-add" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="{{ asset('Assets/457.png')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="{{ asset('Assets/carduri.png')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="{{ asset('Assets/topmedtest1.png')}}" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="{{ asset('Assets/topmed2.png')}}" alt="Forth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="{{ asset('Assets/topmed3.png')}}" alt="Fifth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel-add" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-add" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>




@endsection
