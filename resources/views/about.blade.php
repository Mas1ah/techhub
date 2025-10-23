{{-- resources/views/about.blade.php --}}
@extends('layouts.app')

@section('title', 'About Us | TechHub')

@section('content')
<div class="container my-5">
  <div class="text-center mb-5">
    <h2 class="fw-bold">About <span class="text-primary">TechHub</span></h2>
    <p class="text-muted mx-auto" style="max-width:700px;">
      Welcome to <strong>TechHub</strong> — your one-stop destination for high-performance laptops, GPUs, monitors, and accessories.
      We’re passionate about bringing the latest and most reliable technology to power your creativity, work, and play.
    </p>
  </div>

  <div class="row align-items-center mb-5">
    <div class="col-md-6 mb-4 mb-md-0">
      <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c" 
           alt="Tech workspace" class="img-fluid rounded shadow-sm">
    </div>
    <div class="col-md-6">
      <h4 class="fw-semibold mb-3">Our Mission</h4>
      <p class="text-muted">
        At TechHub, our mission is simple — to make premium technology accessible to everyone.  
        Whether you’re a gamer pushing boundaries, a designer seeking precision, or a student learning the ropes,
        we provide products that match your performance needs and budget.
      </p>
      <ul class="text-muted small">
        <li>Delivering authentic tech products from top global brands</li>
        <li>Ensuring reliable after-sales support and warranty services</li>
        <li>Offering competitive pricing across Pakistan</li>
      </ul>
    </div>
  </div>

  <div class="row align-items-center flex-md-row-reverse mb-5">
    <div class="col-md-6 mb-4 mb-md-0">
      <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786"
           alt="Customer support" class="img-fluid rounded shadow-sm">
    </div>
    <div class="col-md-6">
      <h4 class="fw-semibold mb-3">Our Vision</h4>
      <p class="text-muted">
        To become Pakistan’s most trusted technology retailer — where innovation meets reliability.
        We aim to build long-lasting relationships with our customers through transparency, quality, and care.
      </p>
      <p class="text-muted mb-0">
        As we grow, we continue to expand our product range and refine your shopping experience — both online and in-store.
      </p>
    </div>
  </div>

  <div class="text-center">
    <h4 class="fw-semibold mb-3">Why Choose TechHub?</h4>
    <div class="row g-4 justify-content-center">
      <div class="col-md-3">
        <div class="card h-100 p-3 border-0 shadow-sm">
          <div class="fs-1 mb-2">💻</div>
          <h6>Top Brands</h6>
          <p class="text-muted small">We only stock trusted names — HP, ASUS, Dell, MSI, and more.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card h-100 p-3 border-0 shadow-sm">
          <div class="fs-1 mb-2">⚡</div>
          <h6>Fast Delivery</h6>
          <p class="text-muted small">Nationwide shipping that’s quick, reliable, and trackable.</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card h-100 p-3 border-0 shadow-sm">
          <div class="fs-1 mb-2">💬</div>
          <h6>Customer Support</h6>
          <p class="text-muted small">Our support team is ready to help you 7 days a week.</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
