@extends('layouts.app')

@section('content')
<div class="container my-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="m-0">Manage Graphic Cards</h3>
        <a href="{{ route('graphic-cards.create') }}" class="btn btn-primary">Add New</a>
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
                <th width="150">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cards as $c)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><img src="{{ $c->img }}" style="width:70px; height:50px; object-fit:cover;"></td>
                <td>{{ $c->name }}</td>
                <td>Rs. {{ number_format($c->price) }}</td>
                <td>
                    <a href="{{ route('graphic-cards.edit', $c) }}" class="btn btn-sm btn-secondary">Edit</a>

                    <form action="{{ route('graphic-cards.destroy', $c) }}" 
                          method="POST" class="d-inline"
                          onsubmit="return confirm('Delete this graphic card?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
