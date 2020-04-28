@extends('layouts.admin.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Transaction</h1>
  </div>

  <div class="row">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
          <thead>
            <tr align="center">
              <th>ID</th>
              <th>Travel</th>
              <th>User</th>
              <th>Visa</th>
              <th>Total</th>
              <th>Status</th>
              <th>Detail</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($items as $item)
              <tr>
                <td align="center">{{ $item->id }}</td>
                <td>{{ $item->travel_package->title }}</td>
                <td>{{ $item->user->name }}</td>
                <td>$ {{ $item->additional_visa }}</td>
                <td>$ {{ $item->total }}</td>
                <td>{{ $item->status }}</td>
                <td align="center">
                  <a href="{{ route('transaction.show', $item->id) }}" class="btn btn-success">
                    <i class="fas fa-fw fa-eye"></i>
                  </a>
                </td>
                <td align="center">
                  <a href="{{ route('transaction.edit', $item->id) }}" class="btn btn-info">
                    <i class="fas fa-fw fa-edit"></i>
                  </a>
                </td>
                <td align="center">
                  <form action="{{ route('transaction.destroy', $item->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">
                      <i class="fas fa-fw fa-trash"></i>
                    </button>  
                  </form>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="8" class="text-center">Tidak Ada Data</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
</div>
<!-- /.container-fluid -->
@endsection