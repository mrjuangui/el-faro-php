<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <img src="{{ asset('images/faro-blanco.png') }}" alt="El Faro" height="45px" width="45px" class="me-2 rounded">
    <a class="navbar-brand fw-bold" href="{{ route('home') }}">Diario El Faro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      {{-- Menú principal --}}
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('noticias.categoria', 'deporte') }}">Deporte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('noticias.categoria', 'negocios') }}">Negocios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('noticias.categoria', 'otros') }}">Otros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contacto.create') }}">Contacto</a>
        </li>
      </ul>

      {{-- Login / Registro o Perfil / Logout --}}
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        @guest
            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Registro</a></li>
        @else
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="dropdown-item">Cerrar sesión</button>
                        </form>
                    </li>
                </ul>
            </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
