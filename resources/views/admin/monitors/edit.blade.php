@extends('layouts.app')

@section('content')
<div class="container py-4">

    <h3 class="mb-3">Edit Monitor</h3>

    <form action="{{ route('monitors.update', $monitor->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Monitor Name</label>
            <input type="text" name="name" value="{{ $monitor->name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Price (Rs)</label>
            <input type="number" name="price" value="{{ $monitor->price }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Image URL</label>
            <input type="text" name="img" value="{{ $monitor->img }}" class="form-control" required>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('monitors.index') }}" class="btn btn-secondary">Cancel</a>
    </form>

</div>
@endsection
