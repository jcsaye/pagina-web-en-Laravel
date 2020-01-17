@extends('layouts.app')

@section('content')

  <div class="container-fluid carrousel mt-2">

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/images/carrousel1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/images/carrousel5.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/images/carrousel4.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/images/carrousel2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/images/carrousel3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>

<section class="productos bg-danger">
  <div class="muestra container-fluid mt-3">
  <div class="row d-flex justify-content-center">
      <div class="col-sm-12 col-md-6 col-lg-4 p-3">
        <img class="img-fluid" src="/images/banner-compu.jpg" alt="compu">
        <p class="text-justify p-2"><strong class="h2">TITULO </strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,labore et dolore magna Duis aute irure dolor in r adipisicing elit. Voluptatibus, corrupti. lorem
        </p>
        </div>
      <div class="col-sm-12 col-md-6 col-lg-4 p-3">
        <img class="img-fluid" src="/images/banner-placa.jpg" alt="compu">
        <p class="text-justify p-2"><strong class="h2">TITULO </strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,labore et dolore magna Duis aute irure dolor in r adipisicing elit. Voluptatibus, corrupti. lorem
        </p>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4 p-3">
        <img class="img-fluid" src="/images/banner-compu.jpg" alt="compu">
        <p class="text-justify p-2"><strong class="h2">TITULO </strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,labore et dolore magna Duis aute irure dolor in r adipisicing elit. Voluptatibus, corrupti. lorem
        </p>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4 p-3">
        <img class="img-fluid" src="/images/banner-monitor.jpg" alt="compu">
        <p class="text-justify p-2"><strong class="h2">TITULO </strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,labore et dolore magna Duis aute irure dolor in r adipisicing elit. Voluptatibus, corrupti. lorem
        </p>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4 p-3">
        <img class="img-fluid" src="/images/banner-placa.jpg" alt="compu">
        <p class="text-justify p-2"><strong class="h2">TITULO </strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,labore et dolore magna Duis aute irure dolor in r adipisicing elit. Voluptatibus, corrupti. lorem
        </p>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4 p-3">
        <img class="img-fluid" src="/images/banner-compu.jpg" alt="compu">
        <p class="text-justify p-2"><strong class="h2">TITULO </strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,labore et dolore magna Duis aute irure dolor in r adipisicing elit. Voluptatibus, corrupti. lorem
        </p>
      </div>
    </div>
  </div>
</section>

<section class="gamers">
  <div class="row justify-content-center  ">
    <div class="servicio d-flex justify-content-center col-sm-12 col-lg-5">
      <img class=" img-fluid" src="/images/gamers.jpg" alt="game">
    </div>
    <div class="d-flex justify-content-center col-sm-12 col-lg-5">
      <p class="text-justify p-4 m-2"><strong class="h2">MUNDO GAMERS </strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,labore et dolore magna Duis aute irure dolor in r adipisicing elit. Voluptatibus, corrupti. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>
  </div>
</section>

<section class="Servicios">
  <div class="muestra container-fluid mt-5">
  <div class="row d-flex justify-content-center m-3">
      <div class=" text-center col-lg-3">
        <div class="circulo m-3">
          <i class="fas fa-desktop"></i>
          <h2 class="mt-1">SOPORTE TECNICO</h2>
        </div>
        <div class="">
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,labore et dolore magna Duis aute irure dolor in r adipisicing elit. Voluptatibus, corrupti. lorem
          </p>
        </div>
      </div>
      <div class=" text-center col-lg-3">
        <div class="circulo m-3">
          <i class="fas fa-edit"></i>
          <h2 class="mt-1">DISEÑO WEB</h2>
        </div>
        <div class="">
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,labore et dolore magna Duis aute irure dolor in r adipisicing elit. Voluptatibus, corrupti. lorem
          </p>
        </div>
      </div>
      <div class=" text-center col-lg-3">
        <div class="circulo m-3">
          <i class="fab fa-windows"></i>
          <h2 class="mt-1">SOFTWARE LEGAL</h2>
        </div>
        <div class="">
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,labore et dolore magna Duis aute irure dolor in r adipisicing elit. Voluptatibus, corrupti. lorem
          </p>
        </div>
      </div>
      <div class=" text-center col-lg-3">
        <div class="circulo m-3">
          <i class="fas fa-network-wired"></i>
          <h2 class="mt-1">HOSTING SERVER</h2>
        </div>
        <div class="">
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,labore et dolore magna Duis aute irure dolor in r adipisicing elit. Voluptatibus, corrupti. lorem
          </p>
        </div>
      </div>
    </div>
    </div>
  </section>
  

@endsection
