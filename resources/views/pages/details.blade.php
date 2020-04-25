@extends('layouts.app')
@section('title', 'Package Details')

@push('prepend-style')
  <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
@endpush

@section('content')
<!-- main  -->
<main>
  <section class="section-details-header"></section>
  <section class="section-details-content">
    <div class="container">
      <div class="row">
        <div class="col p-0">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">Package</li>
              <li class="breadcrumb-item active">Details</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 pl-lg-0">
          <div class="card card-details">
            <h1>LABUAN BAJO</h1>
            <p>INDONESIA</p>
            <div class="gallery">
              <div class="xzoom-container">
                <img 
                  src="{{ url('frontend/images/bajo_details/bajo-1.png') }}" 
                  alt="Details Bajo" 
                  class="xzoom"
                  id="xzoom-default"
                  xoriginal="{{ url('frontend/images/bajo_details/bajo-1.png') }}"
                />
                <div class="xzoom-thumbs">
                  <a href="{{ url('frontend/images/bajo_details/bajo-1.png') }}">
                    <img 
                      src="{{ url('frontend/images/bajo_details/bajo-2.png') }}" 
                      alt="Details Bajo"
                      class="xzoom-gallery"
                      width="128"
                      xpreview="{{ url('frontend/images/bajo_details/bajo-1.png') }}"
                    />
                  </a>
                  <a href="{{ url('frontend/images/bajo_details/bajo-3.png') }}">
                    <img 
                      src="{{ url('frontend/images/bajo_details/bajo-3.png') }}" 
                      alt="Details Bajo"
                      class="xzoom-gallery"
                      width="128"
                      xpreview="{{ url('frontend/images/bajo_details/bajo-3.png') }}"
                    />
                  </a>
                  <a href="{{ url('frontend/images/bajo_details/bajo-4.png') }}">
                    <img 
                      src="{{ url('frontend/images/bajo_details/bajo-4.png') }}" 
                      alt="Details Bajo" 
                      class="xzoom-gallery"
                      width="128" 
                      xpreview="{{ url('frontend/images/bajo_details/bajo-4.png') }}"
                    />
                  </a>
                  <a href="{{ url('frontend/images/bajo_details/bajo-5.png') }}">
                    <img 
                      src="{{ url('frontend/images/bajo_details/bajo-5.png') }}" 
                      alt="Details Bajo" 
                      class="xzoom-gallery"
                      width="128" 
                      xpreview="{{ url('frontend/images/bajo_details/bajo-5.png') }}"
                    />
                  </a>
                  <a href="{{ url('frontend/images/bajo_details/bajo-6.png') }}">
                    <img 
                      src="{{ url('frontend/images/bajo_details/bajo-6.png') }}" 
                      alt="Details Bajo" 
                      class="xzoom-gallery"
                      width="128" 
                      xpreview="{{ url('frontend/images/bajo_details/bajo-6.png') }}"
                    />
                  </a>
                </div>
              </div>
            </div>
            <h2>About this Place</h2>
            <p>
              Once a small fishing village, Labuan Bajo (also spelled Labuhanbajo and Labuanbajo)
              is now a tourist center as well as a centre of government for the surrounding region.
              Facilities to support tourist activities are expanding quickly although the rapid rise in
              the numbers of visitors is imposing some strains on the local environment.
            </p>
            <p>
              Labuan Bajo is the gateway for trips across the nearby Komodo National Park to
              Komodo Island and Rinca Island, both home to the famous Komodo dragons.
            </p>
            <div class="features row"> 
              <div class="col-md-4">
                  <img src="{{ url('frontend/images/icons/ic_event.png') }}" alt="" class="features-image">
                  <div class="description">
                    <h3>Featured Events</h3>
                    <p>Tari Kecak</p>
                  </div>
              </div>
              <div class="col-md-4 border-left">
                <div class="description">
                  <img src="{{ url('frontend/images/icons/ic_language.png') }}" alt="" class="features-image">
                  <div class="description">
                    <h3>Language</h3>
                    <p>Indonesia, English</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 border-left">
                <div class="description">
                  <img src="{{ url('frontend/images/icons/ic_foods.png') }}" alt="" class="features-image">
                  <div class="description">
                    <h3>Foods</h3>
                    <p>Local, Western</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card card-details card-right">
            <h2>Members are Going</h2>
            <div class="members my-2">
              <img src="{{ url('frontend/images/bajo_details/members-1.png') }}" alt="" class="member-image mr-1" />
              <img src="{{ url('frontend/images/bajo_details/members-2.png') }}" alt="" class="member-image mr-1" />
              <img src="{{ url('frontend/images/bajo_details/members-3.png') }}" alt="" class="member-image mr-1" />
              <img src="{{ url('frontend/images/bajo_details/members-4.png') }}" alt="" class="member-image mr-1" />
              <img src="{{ url('frontend/images/bajo_details/members-5.png') }}" alt="" class="member-image mr-1" />
              <img src="{{ url('frontend/images/bajo_details/members-6.png') }}" alt="" class="member-image mr-1" />
            </div>
            <hr>
            <h2>Information</h2>
            <table class="trip-information">
              <tr>
                <th width="50%">Date of Departure</th>
                <td width=:50% class="text-right">Aug 20, 2020</td>
              </tr>
              <tr>
                <th width="50%">Duration</th>
                <td width=:50% class="text-right">5D 4N</td>
              </tr>
              <tr>
                <th width="50%">Type</th>
                <td width=:50% class="text-right">Open Public</td>
              </tr>
              <tr>
                <th width="50%">Price</th>
                <td width=:50% class="text-right">$900 / Person</td>
              </tr>
            </table>
          </div>
          <div class="join-container">
            <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now mt-5 py-2">
              JOIN NOW
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

@endsection

@push('addon-script')
  <script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
  <script>
    $(document).ready(function() {
      $('.xzoom, .xzoom-gallery').xzoom({
        zoomWidth: 500,
        title: false,
        tint: '#333',
        xoffset: 15
      });
    });
  </script>
@endpush