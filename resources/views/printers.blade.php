{{-- resources/views/printers.blade.php --}}
@extends('layouts.app')

@section('title','Printers | TechHub')

@section('content')
  <div class="container my-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h3 class="m-0">Printers</h3>
      <div class="small text-muted">Sample printers</div>
    </div>

   @php
  $products = [
    [
      'name'  => 'HP OfficeJet Pro 9015e All-in-One Printer',
      'price' => 44999,
      'img'   => 'https://m.media-amazon.com/images/I/71Tbg8JXmKL.jpg'
    ],
    [
      'name'  => 'Canon PIXMA G6020 MegaTank Printer',
      'price' => 39999,
      'img'   => 'https://m.media-amazon.com/images/I/61-haZ2J5hL._AC_SL1500_.jpg'
    ],
    [
      'name'  => 'Epson EcoTank ET-4850 All-in-One Printer',
      'price' => 34999,
      'img'   => 'https://mediaserver.goepson.com/ImConvServlet/imconv/0f613061ef6f8ef24932e2272e8c0339aa8d3d5d/1200Wx1200H?use=banner&hybrisId=B2C&assetDescr=ET-4850_white_headon-output-feed_690x460'
    ],
    [
      'name'  => 'Brother HL-L2350DW Compact Laser Printer',
      'price' => 28999,
      'img'   => 'https://m.media-amazon.com/images/I/61rNMJYXREL._UF894,1000_QL80_.jpg'
    ],
    [
      'name'  => 'HP LaserJet Pro M404dw Printer',
      'price' => 31999,
      'img'   => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqaCQUD080TEzfuQvKQL8M8308nzkRjCxnUQ&s'
    ],
    [
      'name'  => 'Canon imageCLASS MF445dw Multifunction Laser Printer',
      'price' => 37999,
      'img'   => 'https://i5.walmartimages.com/seo/Canon-imageCLASS-MF743cdw-Color-Laser-MFP-28-ppm-1-GB-600-x-600-dpi-p-s-c-f-Duplex-USB-Ethernet-Wireless-Touchscreen-250-Sheet-Input-Tray-50-Sheet-MP_8120a424-2aee-49fe-acc9-ae54315d1be9.d1ac3e5473095cd91ec5a057b8cf5a4f.jpeg'
    ],
    [
      'name'  => 'Epson Expression Premium XP-6100 Photo Printer',
      'price' => 25999,
      'img'   => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbOpzOP5O-uBSVdOMOIZ2DGIfi0EOcyK1nQg&s'
    ],
    [
      'name'  => 'Brother MFC-L3770CDW Color Laser All-in-One',
      'price' => 42999,
      'img'   => 'https://www.printerbase.co.uk/media/catalog/product/cache/89026844e79db774b63f488ff1fa5762/e/p/epson-xp-6100-02-min.jpg'
  ],
      ];
@endphp


    @include('components.product-grid', ['products'=>$products])
  </div>
@endsection
