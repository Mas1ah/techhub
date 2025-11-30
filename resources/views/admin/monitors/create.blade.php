@extends('layouts.app')

@section('content')
<div class="container py-4">

    <h3 class="mb-3">Add New Monitor</h3>

    <form action="{{ route('monitors.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Monitor Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Price (Rs)</label>
            <input type="number" name="price" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Image URL</label>
            <input type="text" name="img" class="form-control" required>
        </div>

        <button class="btn btn-primary">Save</button>
        <a href="{{ route('monitors.index') }}" class="btn btn-secondary">Cancel</a>
    </form>

</div>
@endsection
