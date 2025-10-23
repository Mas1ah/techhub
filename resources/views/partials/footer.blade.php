{{-- resources/views/partials/footer.blade.php --}}
<footer class="site-footer bg-dark text-light mt-5">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-4">
        <h5>About</h5>
        <p class="small">Welcome to TechHub — your one-stop destination for high-performance laptops, GPUs, monitors, and accessories. We’re passionate about bringing the latest and most reliable technology to power your creativity, work, and play.</p>
      </div>

      <div class="col-md-4">
        <h5>Links</h5>
        <ul class="list-unstyled small">

        <li class="nav-item">
          <a class="nav-link" href="{{ url('/about') }}">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ url('/faq') }}">FAQ</a>
        </li>

        </ul>
      </div>

      <div class="col-md-4">
        <h5>Follow</h5>
        <div class="small">
          <a href="#" class="text-light me-2">Facebook</a>
          <a href="#" class="text-light me-2">Twitter</a>
          <a href="#" class="text-light">Instagram</a>
        </div>
      </div>
    </div>
  </div>

  <div class="bg-black text-center py-3">
    <small>&copy; {{ date('Y') }} TechHub — All rights reserved.</small>
  </div>
</footer>
