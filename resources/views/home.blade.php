{{-- resources/views/home.blade.php --}}
@extends('layouts.app')

@section('title','Home | TechHub')

@section('content')
  <div class="container my-4">

    {{-- Hero carousel --}}
    <div id="heroCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
  <div class="carousel-inner rounded shadow-sm overflow-hidden ratio-16x9">
    <div class="carousel-item active">
      <img src="https://cdn.mos.cms.futurecdn.net/dMrMrHPydXXVnmaS9iWpzN.jpg" class="d-block w-100" alt="Tech Banner 1">
    </div>
    <div class="carousel-item">
      <img src="https://store974.com/cdn/shop/files/CB_Gaming_Laptops_copy.jpg?v=1730365880" class="d-block w-100" alt="Tech Banner 2">
    </div>

    <div class="carousel-item">
      <img src="https://dlcdnwebimgs.asus.com/gain/9F8C42DB-36CE-4003-95E1-94E92594127F/fwebp" class="d-block w-100" alt="Tech Banner 3">
    </div>

    <div class="carousel-item">
      <img src="https://fluxmall.com/wp-content/uploads/2024/01/Fluxmall-TET-2024-Promotion-featured-image.png" class="d-block w-100" alt="Tech Banner 4">
    </div>

    

  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>


    {{-- Icon bar --}}
    <section class="icon-bar bg-light p-3 rounded mb-4">
      <div class="row text-center">
      
      <div class="col-6 col-md-3 mb-3">
          <img src="https://images.priceoye.pk/lenovo-v15-g3-15-6-inches-12th-gen-core-i3-4gb-256gb-ssd-pakistan-priceoye-1q8z2.jpg" alt="Laptops" class="d-block mx-auto mb-2" style="max-height:80px;">
          <div>Laptops</div>
        </div>  
      
        <div class="col-6 col-md-3 mb-3">
          <img src="https://proaudio.com.pk/wp-content/uploads/2024/04/Nvidia_t1000_graphics_card.jpg" alt="Graphic Cards" class="d-block mx-auto mb-2" style="max-height:80px;">
          <div>Graphic Cards</div>
        </div>

      <div class="col-6 col-md-3 mb-3">
          <img src="https://www.pakbyte.pk/cdn/shop/collections/ImgW-1.jpg?v=1727462422" alt="Processors" class="d-block mx-auto mb-2" style="max-height:80px;">
          <div>Monitors</div>
        </div>
        
        
        <div class="col-6 col-md-3 mb-3">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQ9gJ1D0wvEFxfRkQ_mnN31OlyTmSHJqsQUw&s" alt="Gaming Chairs" class="d-block mx-auto mb-2" style="max-height:80px;">
          <div>Printers</div>
        </div>
      </div>
    </section>

    {{-- Featured products grid (real tech product samples) --}}
    <section class="featured-products mb-5">
      <h3 class="mb-3 text-center">Featured Products</h3>
      <div class="row g-4">
        @php
        $products = [
          [
            'name' => 'Apple MacBook Air 13"',
            'price' => 149999,
            'img' => 'https://myshop.pk/pub/media/catalog/product/cache/26f8091d81cea4b38d820a1d1a4f62be/m/a/macbook-air-m2-myshop-pk_6__1_1.jpg'
          ],
          [
            'name' => 'Dell XPS 13 Laptop',
            'price' => 179999,
            'img' => 'https://m.media-amazon.com/images/I/61uCHVcsAvL._AC_SL1105_.jpg'
          ],
          [
            'name' => 'NVIDIA GeForce RTX 4070',
            'price' => 129999,
            'img' => 'https://static3.webx.pk/files/19643/Images/asus-prime-rtx-4070-super-gpu-price-in-pakistan-6-19643-2239496-281024015030137.jpg'
          ],
          [
            'name' => 'ASUS ROG Strix RTX 3080',
            'price' => 115000,
            'img' => 'https://static3.webx.pk/files/821/Images/81gs7whnwss.-ac-sl1500--821-687821-030921071715.jpg'
          ],
          [
            'name' => 'Samsung Odyssey G7 Monitor',
            'price' => 89999,
            'img' => 'https://img.global.news.samsung.com/global/wp-content/uploads/2020/06/Odyssey-G7_main1.jpg'
          ],
          [
            'name' => 'LG UltraGear 27GP850-B',
            'price' => 69999,
            'img' => 'https://m.media-amazon.com/images/I/616ZOS5bnnL._AC_SL1500_.jpg'
          ],
          [
            'name' => 'HP OfficeJet Pro 9015e Printer',
            'price' => 44999,
            'img' => 'https://www.printingwatch.com/wp-content/uploads/61CwOSIirpL1.jpg'
          ],
          [
            'name' => 'Canon PIXMA G6020 Printer',
            'price' => 39999,
            'img' => 'https://www.bhphotovideo.com/images/fb/canon_3113c002_pixma_g6020_wireless_megatank_1484619.jpg'
          ],
        ];
        @endphp

        @foreach ($products as $p)
          <div class="col-6 col-md-3">
            <div class="card h-100 product-card">
              <img src="{{ $p['img'] }}" class="card-img-top" alt="{{ $p['name'] }}">
              <div class="card-body text-center">
                <h6 class="card-title">{{ $p['name'] }}</h6>
                <p class="text-muted mb-2">Rs. {{ number_format($p['price']) }}</p>
                <button class="btn btn-success btn-sm w-100 add-to-cart-btn" data-name="{{ $p['name'] }}" data-price="{{ $p['price'] }}">Add to Cart</button>
              </div>
            </div>
          </div>
        @endforeach

      </div>
    </section>

  </div>
@endsection
