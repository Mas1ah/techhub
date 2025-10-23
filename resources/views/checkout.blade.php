{{-- resources/views/checkout.blade.php --}}
@extends('layouts.app')

@section('title', 'Checkout | TechHub')

@section('content')
<div class="container my-5">
  <h3 class="text-center mb-4">💳 Checkout</h3>

  <div class="row g-4">
    {{-- Billing & Shipping Form --}}
    <div class="col-lg-7">
      <div class="card shadow-sm p-4">
        <h5 class="mb-3">Billing Information</h5>
        <form id="checkout-form">
          <div class="row g-3">
            <div class="col-md-6">
              <label for="firstName" class="form-label">First Name</label>
              <input type="text" class="form-control" id="firstName" required>
            </div>
            <div class="col-md-6">
              <label for="lastName" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="lastName" required>
            </div>
            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="123 Main St" required>
            </div>
            <div class="col-md-6">
              <label for="city" class="form-label">City</label>
              <input type="text" class="form-control" id="city" required>
            </div>
            <div class="col-md-6">
              <label for="zip" class="form-label">Postal Code</label>
              <input type="text" class="form-control" id="zip" required>
            </div>
          </div>

          <hr class="my-4">

          <h5 class="mb-3">Payment Method</h5>
          <div class="form-check mb-2">
            <input class="form-check-input" type="radio" name="paymentMethod" id="cod" value="cod" checked>
            <label class="form-check-label" for="cod">
              Cash on Delivery
            </label>
          </div>
          <div class="form-check mb-4">
            <input class="form-check-input" type="radio" name="paymentMethod" id="card" value="card">
            <label class="form-check-label" for="card">
              Credit / Debit Card (Simulation)
            </label>
          </div>

          <div id="card-info" class="d-none">
            <div class="row g-3">
              <div class="col-12">
                <label for="cardNumber" class="form-label">Card Number</label>
                <input type="text" class="form-control" id="cardNumber" placeholder="xxxx xxxx xxxx xxxx">
              </div>
              <div class="col-md-6">
                <label for="expiry" class="form-label">Expiry Date</label>
                <input type="text" class="form-control" id="expiry" placeholder="MM/YY">
              </div>
              <div class="col-md-6">
                <label for="cvv" class="form-label">CVV</label>
                <input type="password" class="form-control" id="cvv" maxlength="3" placeholder="123">
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button type="submit" class="btn btn-success w-100">Place Order</button>
        </form>
      </div>
    </div>

    {{-- Order Summary --}}
    <div class="col-lg-5">
      <div class="card shadow-sm p-4">
        <h5 class="mb-3">Order Summary</h5>
        <ul class="list-group mb-3" id="order-summary">
          {{-- Populated by JS --}}
        </ul>
        <div class="d-flex justify-content-between mt-3">
          <strong>Total:</strong>
          <span id="checkout-total">Rs. 0</span>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
