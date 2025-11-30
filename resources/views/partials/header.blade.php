{{-- resources/views/partials/header.blade.php --}}
<header class="site-header border-bottom">
  <div class="topbar bg-dark text-light">
    <div class="container d-flex justify-content-between small py-1">
      <div class="d-flex gap-3">
            
              <a class="nav-link" href="{{ url('/about') }}">About</a>
                    

          
              <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
            

       
              <a class="nav-link" href="{{ url('/faq') }}">FAQ</a>

      </div>





      <div class="d-flex gap-3 align-items-center">
  @guest
    <a href="{{ route('login') }}" class="text-light text-decoration-none d-none d-md-inline">Login</a>
    <a href="{{ route('register') }}" class="text-light text-decoration-none d-none d-md-inline">Sign Up</a>
  @else
    <div class="dropdown">
      <a href="#" class="text-light text-decoration-none dropdown-toggle d-none d-md-inline" data-bs-toggle="dropdown" aria-expanded="false">
        {{ Auth::user()->name }}
      </a>
      <ul class="dropdown-menu dropdown-menu-end">
        <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
        <li>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="dropdown-item text-danger">Logout</button>
          </form>
        </li>
      </ul>
    </div>
  @endguest
</div>



    </div>
  </div>

  <div class="container py-3 d-flex flex-wrap align-items-center justify-content-between">
    <a href="{{ url('/') }}" class="brand d-flex align-items-center text-decoration-none">
      <img src="https://icon.icepanel.io/Technology/svg/Fauna.svg" alt="Logo" class="logo me-2">
      <div class="brand-name">TechHub</div>
    </a>

    <form class="search-form flex-grow-1 mx-3" role="search" action="#" method="GET">
      <div class="input-group">
        <input type="search" name="q" class="form-control" placeholder="Search products...">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </div>
    </form>

    <div class="d-flex align-items-center gap-2">
      <a href="{{ url('/cart') }}" class="btn btn-outline-secondary position-relative">
  🛒 Cart 
  <span id="cart-count" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    0
  </span>
</a>
    </div>

    <div class="p-2">

</div>

  <div class="d-flex align-items-center gap-2">
      <a href="{{ url('/admin') }}" class="btn btn-outline-secondary position-relative">
  🛠️ Admin 
</a>
    </div>
  
  </div>

  <nav class="navbar navbar-expand-lg navbar-light bg-light border-top">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/laptops') }}">Laptops</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/graphic-cards') }}">Graphic Cards</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/monitors') }}">Monitors</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/printers') }}">Printers</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
