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
            <h1>{{ $item->title }}</h1>
            <p>{{ $item->location }}</p>
            @if($item->gallery->count())
              <div class="gallery">
                <div class="xzoom-container">
                  <img 
                    src="{{ Storage::url($item->gallery->first()->image) }}" 
                    alt="Details Bajo" 
                    class="xzoom"
                    id="xzoom-default"
                    xoriginal="{{ Storage::url($item->gallery->first()->image) }}"
                  />
                  <div class="xzoom-thumbs">
                    @foreach ($item->gallery as $g)
                      <a href="{{ Storage::url($g->image) }}">
                        <img 
                          src="{{ Storage::url($g->image) }}" 
                          alt="Details Bajo"
                          class="xzoom-gallery"
                          width="128"
                          xpreview="{{ Storage::url($g->image) }}"
                        />
                      </a>
                    @endforeach
                  </div>
                </div>
              </div>
            @endif
            <h2>About this Place</h2>
            <p>
              {!! $item->about !!}
            </p>
            <div class="features row"> 
              <div class="col-md-4">
                  <img src="{{ url('frontend/images/icons/ic_event.png') }}" alt="" class="features-image">
                  <div class="description">
                    <h3>Featured Events</h3>
                    <p>{{ $item->event }}</p>
                  </div>
              </div>
              <div class="col-md-4 border-left">
                <div class="description">
                  <img src="{{ url('frontend/images/icons/ic_language.png') }}" alt="" class="features-image">
                  <div class="description">
                    <h3>Language</h3>
                    <p>{{ $item->language }}</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 border-left">
                <div class="description">
                  <img src="{{ url('frontend/images/icons/ic_foods.png') }}" alt="" class="features-image">
                  <div class="description">
                    <h3>Foods</h3>
                    <p>{{ $item->food }}</p>
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
                <td width=:50% class="text-right">
                  {{ \Carbon\Carbon::create($item->departure_date)->format('F n, Y')}}
                </td>
              </tr>
              <tr>
                <th width="50%">Duration</th>
                <td width=:50% class="text-right">{{ $item->duration }}</td>
              </tr>
              <tr>
                <th width="50%">Type</th>
                <td width=:50% class="text-right">{{ $item->type }}</td>
              </tr>
              <tr>
                <th width="50%">Price</th>
                <td width=:50% class="text-right">${{ $item->price }} / Person</td>
              </tr>
            </table>
          </div>
          <div class="join-container">
            @auth
              <form action="" method="post">
                <button class="btn btn-block btn-join-now mt-5 py-2" type="submit">
                  JOIN NOW
                </button>
              </form>
            @endauth
            @guest
              <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now mt-5 py-2">
                JOIN NOW
              </a>
            @endguest
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