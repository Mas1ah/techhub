{{-- resources/views/components/product-grid.blade.php --}}
<div class="row g-4">
  @foreach($products as $p)
    <div class="col-6 col-md-3">
      <div class="card h-100 product-card">
        <img src="{{ $p['img'] }}" class="card-img-top" alt="{{ $p['name'] }}">
        <div class="card-body text-center">
          <h6 class="card-title">{{ $p['name'] }}</h6>
          <p class="text-muted mb-2">Rs. {{ number_format($p['price']) }}</p>
          <button 
            class="btn btn-success btn-sm w-100 add-to-cart-btn"
            data-name="{{ $p['name'] }}"
            data-price="{{ $p['price'] }}">
            Add to Cart
          </button>
        </div>
      </div>
    </div>
  @endforeach
</div>
