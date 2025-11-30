<div class="row g-3">
    @forelse($products as $p)
        <div class="col-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm">
                <img 
                    src="{{ $p->img }}" 
                    class="card-img-top" 
                    alt="{{ $p->name }}" 
                    style="height:180px; object-fit:cover;"
                >

                <div class="card-body d-flex flex-column">
                    <h6 class="card-title mb-2">{{ $p->name }}</h6>

                    <div class="mt-auto">
                        <div class="fw-bold mb-2">Rs. {{ number_format($p->price) }}</div>

                        <button 
                            class="btn btn-success btn-sm w-100 add-to-cart-btn"
                            data-name="{{ $p->name }}"
                            data-price="{{ $p->price }}"
                        >
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12 text-center text-muted py-5">
            No products found.
        </div>
    @endforelse
</div>
