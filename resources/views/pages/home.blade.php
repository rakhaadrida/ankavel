@extends('layouts.app')
@section('title', 'ANKAVEL')

@section('content')
<!-- header  -->
<header class="text-center">
  <h1>
    EXPLORE THE WORLD
    <br>
    AS EASY ONE CLICK
  </h1>
  <p>
    You will see beautiful moment
    <br>
    you never seen before
  </p>
  <a href="#popular" class="btn btn-get-started px-4 mt-4">Get Started</a>
</header>

<!-- main content  -->
<main>
  <!-- stats  -->
  <div class="container">
    <section class="section-stats row justify-content-center">
      <div class="col-3 col-md-2 stats-detail text-center">
        <h2>20K</h2>
        <p>Members</p>
      </div>
      <div class="col-3 col-md-2 stats-detail text-center">
        <h2>15</h2>
        <p>Countries</p>
      </div>
      <div class="col-3 col-md-2 stats-detail text-center">
        <h2>300</h2>
        <p>Destination</p>
      </div>
      <div class="col-3 col-md-2 stats-detail text-center">
        <h2>2K</h2>
        <p>Hotels</p>
      </div>
      <div class="col-3 col-md-2 stats-detail text-center">
        <h2>29</h2>
        <p>Partners</p>
      </div>
    </section>
  </div>

  <!-- popular  -->
  <section class="section-popular" id="popular">
    <div class="container">
      <div class="row">
        <div class="col text-center section-popular-heading">
          <h2>Popular Destination</h2>
          <p>Something you never tried before</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-popular-content" id="popularcontent">
    <div class="container">
      <div class="section-popular-travel row justify-content-center">
        @foreach ($items as $item)
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column"
              style="background-image: 
                url('{{ $item->gallery->count() ? Storage::url($item->gallery->first()->image) : '' }} ');">
              <div class="travel-country">{{ $item->location }}</div>
              <div class="travel-location">{{ $item->title }}</div>
              <div class="travel-button mt-auto">
                <a href="{{ route('details', $item->slug) }}" class="btn btn-travel-explore px-4">Explore</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- partners  -->
  <section class="section-partners">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Our Partners</h2>
          <p>
            Companies that trusted us
            <br>
            for your amazing trip
          </p>
        </div>
        <div class="col-md-8 text-center">
          <img 
            src="{{ url('frontend/images/partner/partner.png') }}" 
            class="img-partner" 
            alt="logo-partner"
          >
        </div>
      </div>
    </div>
  </section>

  <!-- testimonial  -->
  <section class="section-testimonial-heading" id="testimonial">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h2>They are Loving Us</h2>
          <p>
            Moment we giving them are
            <br>
            the best experience
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-testimonial-content" id="testimonicontent">
    <div class="container">
      <div class="section-popular-travel row justify-content-center">
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="card card-testimonial text-center">
            <div class="testimonial-content">
              <img 
                src="{{ url('frontend/images/pic/testi-1.png') }}" 
                alt="testimoni"
                class="mb-4 rounded-circle"
              >
              <h3 class="mb-4">Anisa Bekti</h3>
              <p class="testimonial">
                " It was glorious and amazing trip.
                I will travel again with this services "
              </p>
              <hr>
              <p class="trip-to mt-2">
                Trip to Labuan Bajo
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="card card-testimonial text-center">
            <div class="testimonial-content">
              <img src="{{ url('frontend/images/pic/testi-2.png') }}" alt="testimoni" class="mb-4 rounded-circle">
              <h3 class="mb-4">Rakha Adrida</h3>
              <p class="testimonial">
                " The trip was amazing and I see something
                beautiful that makes me want to learn more "
              </p>
              <hr>
              <p class="trip-to mt-2">
                Trip to Amsterdam
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="card card-testimonial text-center">
            <div class="testimonial-content">
              <img src="{{ url('frontend/images/pic/testi-3.png') }}" alt="testimoni" class="mb-4 rounded-circle">
              <h3 class="mb-4">Keiby Jolie</h3>
              <p class="testimonial">
                " It was glorious and I could not stop
                say wohoo for every single moment "
              </p>
              <hr>
              <p class="trip-to mt-2">
                Trip to Phuket
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
            I Need Help
          </a>
          <a href="{{ route('register') }}" class="btn btn-explore-now px-4 mt-4 mx-1">
            Explore Now
          </a>
        </div>
      </div>
    </div>
  </section>
</main>

@endsection