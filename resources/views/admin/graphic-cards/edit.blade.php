@extends('layouts.app')

@section('content')
<div class="container my-4">
  <h3>Edit Graphic Card</h3>

  <form action="{{ route('graphic-cards.update', $graphic_card) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="text" name="name" class="form-control"
             value="{{ $graphic_card->name }}" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Price</label>
      <input type="number" name="price" class="form-control"
             value="{{ $graphic_card->price }}" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Image URL</label>
      <input type="url" name="img" class="form-control"
             value="{{ $graphic_card->img }}" required>
    </div>

    <button class="btn btn-primary">Update</button>
    <a href="{{ route('graphic-cards.index') }}" class="btn btn-light">Cancel</a>
  </form>
</div>
@endsection
