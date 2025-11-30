@extends('layouts.app')

@section('title', 'Admin Dashboard | TechHub')

@section('content')
<div class="container my-4">

    <h3 class="mb-4">Admin Dashboard</h3>

    <div class="row g-4">

        {{-- Laptops --}}
        <div class="col-md-3">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <img 
                    src="https://static.vecteezy.com/system/resources/previews/014/504/161/non_2x/laptop-gear-system-icon-simple-style-vector.jpg" 
                    class="card-img-top" 
                    style="height:180px; object-fit:cover;"
                >
                    <h5 class="card-title">Laptops</h5>
                    <p class="text-muted small">Manage laptop products</p>
                    <a href="{{ $links['laptops'] }}" class="btn btn-primary w-100">Open</a>
                </div>
            </div>
        </div>

        {{-- GPUs --}}
        <div class="col-md-3">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <img 
                    src="https://static.vecteezy.com/system/resources/thumbnails/014/935/546/small_2x/chip-gpu-card-icon-simple-graphic-pc-vector.jpg" 
                    class="card-img-top" 
                    style="height:180px; object-fit:cover;"
                >
                    <h5 class="card-title">Graphic Cards</h5>
                    <p class="text-muted small">Manage GPU products</p>
                    <a href="{{ $links['gpus'] }}" class="btn btn-primary w-100">Open</a>
                </div>
            </div>
        </div>

        {{-- Monitors --}}
        <div class="col-md-3">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <img 
                    src="https://static.vecteezy.com/system/resources/previews/015/306/927/non_2x/gears-on-the-monitor-icon-outline-style-vector.jpg" 
                    class="card-img-top" 
                    style="height:180px; object-fit:cover;"
                >
                    <h5 class="card-title">Monitors</h5>
                    <p class="text-muted small">Manage Monitors</p>
                    <a href="{{ $links['monitors'] }}" class="btn btn-primary w-100">Open</a>
                </div>
            </div>
        </div>

        {{-- Printers --}}
        <div class="col-md-3">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <img 
                    src="https://img.icons8.com/external-solidglyph-m-oki-orlando/1200/external-printer-setting-settings-and-configurations-solid-solidglyph-m-oki-orlando.jpg" 
                    class="card-img-top" 
                    style="height:180px; object-fit:cover;"
                >
                    <h5 class="card-title">Printers</h5>
                    <p class="text-muted small">Manage Printers</p>
                    <a href="{{ $links['printers'] }}" class="btn btn-primary w-100">Open</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
