@extends('layouts.app')

@section('content')
<div class="container my-4">
  <h3>Add Printer</h3>

  @if($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">
        @foreach($errors->all() as $e)
          <li>{{ $e }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('printers.store') }}" method="POST">
    @csrf
    
    <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="text" name="name" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Price</label>
      <input type="number" name="price" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Image URL</label>
      <input type="url" name="img" class="form-control">
    </div>

    <button class="btn btn-primary">Save</button>
    <a href="{{ route('printers.index') }}" class="btn btn-light">Cancel</a>
  </form>
</div>
@endsection
