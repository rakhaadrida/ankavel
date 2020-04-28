@extends('layouts.admin.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Transaction Detail {{ $item->user->name }}</h1>
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
            <table class="table table-bordered">
              <tr>
                <th>Travel Package</th>
                <td>{{ $item->travel_package->title }}</td>
              </tr>
              <tr>
                <th>Name</th>
                <td>{{ $item->user->name }}</td>
              </tr>
              <tr>
                <th>Additional Visa</th>
                <td>$ {{ $item->additional_visa }}</td>
              </tr>
              <tr>
                <th>Transaction total</th>
                <td>$ {{ $item->total }}</td>
              </tr>
              <tr>
                <th>Transaction Status</th>
                <td>{{ $item->status }}</td>
              </tr>
              <tr>
                <th>Booking Detail</th>
                <td>
                  <table class="table table-bordered">
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Nationality</th>
                      <th>VISA</th>
                      <th>DOE PASSPORT</th>
                    </tr>
                    <tr>
                    @foreach ($item->details as $detail)
                      <td>{{ $detail->id }}</td>
                      <td>{{ $detail->username }}</td>
                      <td>{{ $detail->nationality }}</td>
                      <td>{{ $detail->is_visa ? '30 Days' : 'N/A' }}</td>
                      <td>{{ $detail->doe_passport }}</td>
                      </tr>
                    @endforeach
                  </table>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>
<!-- /.container-fluid -->
@endsection