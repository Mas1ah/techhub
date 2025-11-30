@extends('layouts.app')


@section('content')
<div class="container my-4">
<h3>Edit Laptop</h3>


@if($errors->any())
<div class="alert alert-danger">
<ul class="mb-0">
@foreach($errors->all() as $e)
<li>{{ $e }}</li>
@endforeach
</ul>
</div>
@endif


<form action="{{ route('laptops.update', $laptop) }}" method="POST">
@csrf
@method('PUT')


<div class="mb-3">
<label class="form-label">Name</label>
<input type="text" name="name" class="form-control" value="{{ old('name', $laptop->name) }}">
</div>
<div class="mb-3">
<label class="form-label">Price</label>
<input type="number" name="price" class="form-control" value="{{ old('price', $laptop->price) }}">
</div>
<div class="mb-3">
<label class="form-label">Image URL</label>
<input type="url" name="img" class="form-control" value="{{ old('img', $laptop->img) }}">
</div>


<button class="btn btn-primary">Update</button>
<a href="{{ route('laptops.index') }}" class="btn btn-light">Cancel</a>
</form>
</div>
@endsection