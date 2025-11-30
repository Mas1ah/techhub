@extends('layouts.app')

@section('content')
<div class="container my-4">
  <h3>Add Graphic Card</h3>

  <form action="{{ route('graphic-cards.store') }}" method="POST">
    @csrf

    <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Price</label>
      <input type="number" name="price" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Image URL</label>
      <input type="url" name="img" class="form-control" required>
    </div>

    <button class="btn btn-primary">Save</button>
    <a href="{{ route('graphic-cards.index') }}" class="btn btn-light">Cancel</a>
  </form>
</div>
@endsection
