@extends('layouts.app')

@section('title','Monitors | TechHub')

@section('content')
<div class="container my-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="m-0">Monitors</h3>
        <div class="small text-muted">Sample monitors</div>
    </div>

    @php
        $products = App\Models\Monitor::all();
    @endphp

    @include('components.product-grid', ['products' => $products])
</div>
@endsection
