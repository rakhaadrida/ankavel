@extends('layouts.success')
@section('title', 'Checkout Success')

@section('content')
<!-- main  -->
<main>
  <div class="section-success d-flex align-items-center">
    <div class="col text-center">
      <img src="{{ url('frontend/images/icons/ic_mail_2.png') }}" alt="">
      <h1>Yay! Success</h1>
      <p>
        We sent you email for this trip instruction 
        <br>
        please read it well
      </p>
      <a href="{{ route('home') }}" class="btn btn-home-page mt-3 px-5">
        Home Page
      </a>
    </div>
  </div>
</main>

@endsection