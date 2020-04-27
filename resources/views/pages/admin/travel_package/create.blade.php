@extends('layouts.admin.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Add Travel Packages</h1>
  </div>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

  <div class="row">
    <div class="card-body">
      <div class="table-responsive">
        <div class="card show">
          <div class="card-body">
            <form action="{{ route('travel-package.store') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Title" 
                  value="{{ old('title') }}">
              </div>
              <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" name="location" placeholder="Location" 
                  value="{{ old('location') }}">
              </div>
              <div class="form-group">
                <label for="about">About</label>
                <textarea name="about" class="form-control" rows="10">
                  {{ old('about') }}
                </textarea>
              </div>
              <div class="form-group">
                <label for="event">Event</label>
                <input type="text" class="form-control" name="event" placeholder="Event" 
                  value="{{ old('event') }}">
              </div>
              <div class="form-group">
                <label for="language">Language</label>
                <input type="text" class="form-control" name="language" placeholder="Language" 
                  value="{{ old('language') }}">
              </div>
              <div class="form-group">
                <label for="food">Food</label>
                <input type="text" class="form-control" name="food" placeholder="Food" 
                  value="{{ old('food') }}">
              </div>
              <div class="form-group">
                <label for="departure_date">Departure Date</label>
                <input type="date" class="form-control" name="departure_date" placeholder="Departure Date" 
                  value="{{ old('departure_date') }}">
              </div>
              <div class="form-group">
                <label for="duration">Duration</label>
                <input type="text" class="form-control" name="duration" placeholder="Duration" 
                  value="{{ old('duration') }}">
              </div>
              <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control" name="type" placeholder="Type" 
                  value="{{ old('type') }}">
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" name="price" placeholder="Price" 
                  value="{{ old('price') }}">
              </div>
              <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>
<!-- /.container-fluid -->
@endsection