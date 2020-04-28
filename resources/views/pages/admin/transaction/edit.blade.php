@extends('layouts.admin.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Transaction Status {{ $item->id }}</h1>
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
            <form action="{{ route('transaction.update', $item->id )}}" method="POST">
              @method('PUT')
              @csrf
              <div class="form-group">
                <label for="status">Transaction Status</label>
                <select name="status" required class="form-control">
                  <option value="IN_CART" @if($item->status == "IN_CART") selected @endif>IN_CART</option>
                  <option value="PENDING" @if($item->status == "PENDING") selected @endif>PENDING</option>
                  <option value="SUCCESS" @if($item->status == "SUCCESS") selected @endif>SUCCESS</option>
                  <option value="CANCEL" @if($item->status == "CANCEL") selected @endif>CANCEL</option>
                  <option value="FAILED" @if($item->status == "FAILED") selected @endif>FAILED</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>
<!-- /.container-fluid -->
@endsection