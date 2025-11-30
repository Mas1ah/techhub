@extends('layouts.app')


@section('content')
<div class="container my-4">
<div class="d-flex justify-content-between align-items-center mb-3">
<h3 class="m-0">Manage Laptops</h3>
<a href="{{ route('laptops.create') }}" class="btn btn-primary">Add New</a>
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
@foreach($laptops as $l)
<tr>
<td>{{ $loop->iteration }}</td>
<td style="width:80px"><img src="{{ $l->img }}" alt="" style="width:70px; height:50px; object-fit:cover;"></td>
<td>{{ $l->name }}</td>
<td>Rs. {{ number_format($l->price) }}</td>
<td>
<a href="{{ route('laptops.edit', $l) }}" class="btn btn-sm btn-secondary">Edit</a>


<form action="{{ route('laptops.destroy', $l) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Delete this laptop?');">
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