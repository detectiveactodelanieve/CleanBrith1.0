@extends('layouts.index')

@section('seo')
<title>{{$seo->title}}</title> 
<meta name="description" content="{{$seo->description}}">
<meta name="keywords" content="{{$seo->keywords}}">

@endsection
@section('content')
<section class="carusel">
      <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
          @foreach($inicio as $item)
          <div class="carousel-item {{$item->class}} ">
            <img src="{{asset('imagen/'.$item->image)}}" class="d-block w-100" alt="...">
          </div>
          @endforeach 
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      
    </section>

    <div  class="mis-vis" id="misvis">
      

     <section class="Vision">
        <h2 class="v-mision"><i class="bi bi-rocket-takeoff-fill"></i> Mision</h2>
            <p>{{$Vision->name}}</p>

     </section>
     <section class="Mision">
        <h2 class="v"><i class="bi bi-award"></i> Vision</h2>
        <p>{{$Mision->name}}</p>
      

     </section>
        
    </div>

    <div>
      <section class="logro">
        <section id="img-1">
          <img src="{{asset('imagen/' . $card->image)}}" alt="Logro" style="height: 350px; object-fit: contain;" >
        </section>
    </div>


    <div class="container" id="servis">
        <h2 class="serv">Nuestros Servicios</h2>

        <div class="flex-section">
          @foreach ($servicios as $item)

            <div class="Servicios">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-buildings-fill" viewBox="0 0 16 16">
                  <path d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zM2 11h1v1H2zm2 0h1v1H4zm-1 2v1H2v-1zm1 0h1v1H4zm9-10v1h-1V3zM8 5h1v1H8zm1 2v1H8V7zM8 9h1v1H8zm2 0h1v1h-1zm-1 2v1H8v-1zm1 0h1v1h-1zm3-2v1h-1V9zm-1 2h1v1h-1zm-2-4h1v1h-1zm3 0v1h-1V7zm-2-2v1h-1V5zm1 0h1v1h-1z"/>
                </svg>
                <h3 class="info">{{$item->title}}</h3>
                <p> {{$item->description}}.</p>
            </div>
            @endforeach
        </div>
    </div>
@endsection