@extends('layouts.checkout')
@section('title', 'Checkout')

@push('prepend-style')
  <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}">
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
              <li class="breadcrumb-item">Details</li>
              <li class="breadcrumb-item active">Checkout</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 pl-lg-0">
          <div class="card card-details">
            <h1>Who is Going?</h1>
            <p>Trip to Labuan Bajo, Indonesia</p>
            <div class="attendee">
              <table class="table table-responsive-sm text-center">
                <thead>
                  <tr>
                    <td>Picture</td>
                    <td>Name</td>
                    <td>Nationality</td>
                    <td>VISA</td>
                    <td>Passport</td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <img src="{{ url('frontend/images/pic/testi-1.png') }}" height="50px">
                    </td>
                    <td class="align-middle">Anisa Bekti</td>
                    <td class="align-middle">NL</td>
                    <td class="align-middle">N/A</td>
                    <td class="align-middle">Active</td>
                    <td class="align-middle">
                      <a href="#">
                        <img src="{{ url('frontend/images/icons/ic_remove.png') }}" height="20px">
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{ url('frontend/images/pic/testi-2.png') }}" height="50px">
                    </td>
                    <td class="align-middle">Rakha Adrida</td>
                    <td class="align-middle">NL</td>
                    <td class="align-middle">30 Days</td>
                    <td class="align-middle">Active</td>
                    <td class="align-middle">
                      <a href="#">
                        <img src="{{ url('frontend/images/icons/ic_remove.png') }}" height="20px">
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="member mt-3">
              <h2>Add Member</h2>
              <form class="form-inline">
                <label for="inputUsername" class="sr-only">Name</label>
                <input 
                  type="text"
                  class="form-control mb-2 mr-sm-2" 
                  id="inputUsername"
                  placeholder="Username" 
                />

                <label for="inputVisa" class="sr-only">VISA</label>
                <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                  <option value="VISA" selected>VISA</option>
                  <option value="N/A">N/A</option>
                  <option value="30 Days">30 Days</option>
                  <option value="60 Days">60 Days</option>
                </select>

                <label for="doePassport" class="sr-only">DOE Passport</label>
                <div class="input-group mb-2 mr-sm-2">
                  <input 
                    type="text" 
                    class="form-control datepicker" 
                    id="doePassport" 
                    placeholder="DOE Passport"
                  >
                </div>

                <button type="submit" class="btn btn-add-now mb-2 px-4">
                  Add Now
                </button>
              </form>
              <h3 class="mt-2 mb-0">Note</h3>
              <p class="disclaimer mb-0">
                You only can add member that already registered in Ankavel
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card card-details card-right">
            <h2>Checkout Information</h2>
            <table class="trip-information">
              <tr>
                <th width="50%">Members</th>
                <td width=:50% class="text-right">2 Persons</td>
              </tr>
              <tr>
                <th width="50%">Additional VISA</th>
                <td width=:50% class="text-right">$ 190.00</td>
              </tr>
              <tr>
                <th width="50%">Trip Price</th>
                <td width=:50% class="text-right">$ 900 / Person</td>
              </tr>
              <tr>
                <th width="50%">Total Price</th>
                <td width=:50% class="text-right">$ 1990.00</td>
              </tr>
              <tr>
                <th width="50%">Total Pay</th>
                <td width=:50% class="text-right text-total">
                  <span class="text-blue">$ 1990</span>
                  <span class="text-orange">.33</span>
                </td>
              </tr>
            </table>
            <hr>
            <h2>Payment Instructions</h2>
            <p class="payment-instructions">
              Please complete your payment to one of these account
            </p>
            <div class="bank">
              <div class="bank-item pb-3">
                <img src="{{ url('frontend/images/icons/ic_bank_2.png') }}" class="bank-image">
                <div class="description">
                  <h3>PT ANKAVEL TRIP</h3>
                  <p>
                    Bank Mandiri
                    <br>
                    1433-7685-09723
                  </p>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="bank-item pb-3">
                <img src="{{ url('frontend/images/icons/ic_bank_2.png') }}" class="bank-image">
                <div class="description">
                  <h3>PT ANKAVEL TRIP</h3>
                  <p>
                    Bank HSBC
                    <br>
                    3390-8765-18744
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="join-container">
            <a href="{{ route('checkout-success') }}" class="btn btn-block btn-join-now mt-5 py-2">
              I HAVE MADE PAYMENT
            </a>
          </div>
          <div class="text-center mt-3">
            <a href="{{ route('details') }}" class="text-muted">
              CANCEL BOOKING
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

@endsection

@push('addon-script')
  <script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
  <script>
    $(document).ready(function() {
      $('.datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        icons: {
          rightIcon: '<img src="{{ url('frontend/images/icons/ic_calendar.png') }}" />'
        }
      });
    });
  </script>
@endpush