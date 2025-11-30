@extends('layouts.app')

@section('content')
<div class="container my-4">

  <div class="d-flex justify-content-between mb-3">
    <h3 class="m-0">Manage Printers</h3>
    <a href="{{ route('printers.create') }}" class="btn btn-primary">Add New</a>
  </div>
  <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Go back</a>


  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Image</th>
        <th>Name</th>
        <th>Price</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

      @foreach($printers as $p)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td><img src="{{ $p->img }}" style="width:70px; height:50px; object-fit:cover"></td>
        <td>{{ $p->name }}</td>
        <td>Rs. {{ number_format($p->price) }}</td>

        <td>
          <a href="{{ route('printers.edit', $p) }}" class="btn btn-sm btn-secondary">Edit</a>

          <form action="{{ route('printers.destroy', $p) }}" method="POST" style="display:inline-block">
            @csrf
            @method('DELETE')
            <button onclick="return confirm('Delete this item?')" class="btn btn-sm btn-danger">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
@endsection
