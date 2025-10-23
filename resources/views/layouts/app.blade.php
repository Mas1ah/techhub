<!-- {{-- resources/views/layouts/app.blade.php --}} -->
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <link rel="icon" type="image/png" href="https://icon.icepanel.io/Technology/svg/Fauna.svg">
  <title>@yield('title', 'TechHub')</title>

  <!-- Bootstrap (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Your app CSS (place this file at public/css/app.css) -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  @stack('head')
</head>

<body>


  <div class="site-wrapper">

    @include('partials.header')

    <main class="site-main">
      @yield('content')
    </main>

    @include('partials.footer')

  </div>

  <!-- Bootstrap JS only for components (optional later) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  @stack('scripts')

<script src="{{ asset('js/app.js') }}"></script>



</body>



</html>
