{{-- resources/views/cart.blade.php --}}
@extends('layouts.app')

@section('title','Your Cart | Your Store')

@section('content')
<div class="container my-5">
  <h3 class="mb-4 text-center">🛒 Your Shopping Cart</h3>

  <div id="cart-container">
    <div class="table-responsive d-none" id="cart-table-wrapper">
      <table class="table align-middle">
        <thead class="table-light">
          <tr>
            <th scope="col">Product</th>
            <th scope="col">Price (Rs.)</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total (Rs.)</th>
            <th scope="col" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody id="cart-items">
          {{-- JS will populate items here --}}
        </tbody>
      </table>
    </div>

    <div class="text-center" id="empty-cart">
      <img src="https://cdn-icons-png.flaticon.com/512/2038/2038854.png" alt="Empty Cart" class="img-fluid mb-3" style="max-width:120px;">
      <h5>Your cart is empty</h5>
      <p class="text-muted mb-4">Looks like you haven’t added anything yet.</p>
      <a href="{{ url('/') }}" class="btn btn-primary">Continue Shopping</a>
    </div>

    <div class="mt-4 d-none" id="cart-summary">
      <div class="card p-3 shadow-sm">
        <div class="d-flex justify-content-between mb-2">
          <strong>Subtotal:</strong>
          <span id="cart-subtotal">Rs. 0</span>
        </div>
        <div class="d-flex justify-content-between mb-2">
          <strong>Shipping:</strong>
          <span>Free</span>
        </div>
        <hr>
        <div class="d-flex justify-content-between mb-3">
          <strong>Total:</strong>
          <span id="cart-total">Rs. 0</span>
        </div>
            <a href="{{ url('/checkout') }}" class="btn btn-success w-100" id="checkout-btn">Proceed to Checkout</a>
      </div>
    </div>
  </div>
</div>
@endsection
