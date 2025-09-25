<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>El Faro - @yield('title', 'Periódico Digital')</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

</head>
<body>

<body>
    <!-- Ticker de noticias -->
    <div class="bg-danger text-white py-1">
        <div class="container-fluid overflow-hidden">
            <div id="ticker" class="ticker d-flex">
                @foreach($ticker as $item)
                <span class="me-5">{{ $item }}</span>
                <span class="me-5"> | </span>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Contenido principal -->
    <main class="container my-4">
        @yield('content')
    </main>


  <!-- Footer -->
  <footer class="bg-dark text-light pt-5 pb-3 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5>El Faro</h5>
          <p>Periódico digital al servicio de la comunidad.</p>
        </div>
        <div class="col-md-4">
          <h5>Enlaces</h5>
          <ul class="list-unstyled">
            <li><a href="{{ route('home') }}" class="text-light text-decoration-none">Inicio</a></li>
            <li><a href="{{ route('noticias.categoria', 'deporte') }}" class="text-light text-decoration-none">Deportes</a></li>
            <li><a href="{{ route('noticias.categoria', 'negocios') }}" class="text-light text-decoration-none">Negocios</a></li>
            <li><a href="{{ route('contacto.create') }}" class="text-white">Contacto</a></li>
          </ul>
        </div>
        <div class="col-md-4" id="contacto">
          <h5>Contacto</h5>
          <p>Email: contacto@elfaro.com</p>
          <p>Tel: +56 123 456 789</p>
        </div>
      </div>
      <div class="text-center mt-3">
        <small>&copy; <span id="year"></span> El Faro - Todos los derechos reservados.</small>
      </div>
    </div>
  </footer>

    <!-- Bootstrap JS (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Scripts propios -->
    <script src="{{ asset('js/scripts.js') }}"></script>

    @stack('scripts')
</body>
</html>
