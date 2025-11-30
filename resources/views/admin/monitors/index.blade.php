@extends('layouts.app')

@section('content')
<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="m-0">Manage Monitors</h3>
        <a href="{{ route('monitors.create') }}" class="btn btn-primary">Add Monitor</a>
    </div>
    <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Go back</a>


    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped align-middle">
        <thead>
            <tr>
                <th width="70">ID</th>
                <th width="120">Image</th>
                <th>Name</th>
                <th width="150">Price (Rs)</th>
                <th width="200">Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse($monitors as $m)
                <tr>
                    <td>{{ $m->id }}</td>

                    <td>
                        <img src="{{ $m->img }}" class="img-fluid rounded" style="height:70px; object-fit:cover;">
                    </td>

                    <td>{{ $m->name }}</td>

                    <td>{{ number_format($m->price) }}</td>

                    <td>
                        <a href="{{ route('monitors.edit', $m->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('monitors.destroy', $m->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete this item?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">No monitors found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
