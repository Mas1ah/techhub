@extends('layouts.app')


@section('title','Laptops | TechHub')


@section('content')
<div class="container my-4">
<div class="d-flex justify-content-between align-items-center mb-3">
<h3 class="m-0">Laptops</h3>
<div class="small text-muted">Showing products</div>
</div>


@include('components.product-grid', ['products'=>$products])
</div>
@endsection