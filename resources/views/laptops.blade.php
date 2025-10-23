{{-- resources/views/laptops.blade.php --}}
@extends('layouts.app')

@section('title','Laptops | TechHub')

@section('content')
  <div class="container my-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h3 class="m-0">Laptops</h3>
      <div class="small text-muted">Showing sample products</div>
    </div>

    @php
      $products = [
        [
          'name' => 'Apple MacBook Air 13″ (M4)',
          'price' => 149999,
          'img' => 'https://applemac.pk/public/uploads/products/org/1748417868.jpg'
        ],
        [
          'name' => 'Dell XPS 13 (2025)',
          'price' => 179999,
          'img' => 'https://assets-prd.ignimgs.com/2022/01/04/dell-xps-13-6-1641324593272.jpg'
        ],
        [
          'name' => 'Asus Zenbook S 16 (2025)',
          'price' => 169999,
          'img' => 'https://media.ldlc.com/r1600/ld/products/00/06/15/07/LD0006150740.jpg'
        ],
        [
          'name' => 'Razer Blade 16 (2025)',
          'price' => 299999,
          'img' => 'https://platform.theverge.com/wp-content/uploads/sites/2/chorus/uploads/chorus_asset/file/25820401/257474_CES_2025_Razer_Blade_16_ADiBenedetto_0005.jpg?quality=90&strip=all&crop=16.666666666667,0,66.666666666667,100'
        ],
        [
          'name' => 'Lenovo Yoga 9i 14″',
          'price' => 159999,
          'img' => 'https://images.tokopedia.net/img/cache/700/VqbcmM/2023/7/10/391221d5-feb5-4531-85f5-0671d8f0e9c8.jpg'
        ],
        [
          'name' => 'MSI Stealth 14 AI (2025)',
          'price' => 189999,
          'img' => 'https://m.media-amazon.com/images/I/61utyMQQ3QL._UF894,1000_QL80_.jpg'
        ],
        [
          'name' => 'HP Spectre x360 14 (2025)',
          'price' => 139999,
          'img' => 'https://cdn.webshopapp.com/shops/297927/files/459034092/hp-nbr-160-wqxga-pc-ultra-7-155h-16g-1t-ssd-w11-nl.jpg'
        ],
        [
          'name' => 'Acer Swift Go 14 (2025)',
          'price' => 119999,
          'img' => 'https://pimcdn.sharafdg.com/cdn-cgi/image/width=600,height=600,fit=pad,format=webp,quality=70/images/S400889974_1?1741309449'
        ],
      ];
    @endphp

    @include('components.product-grid', ['products'=>$products])
  </div>
@endsection

