<nav class="navbar navbar-expand-lg navbar-light bg-primary shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">Institut Garcia</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('dashboard') }}">Inici</a>
        </li>

        @auth
          @if (Auth::user()->email === 'admin@admin.cat')
            <li class="nav-item">
              <a class="nav-link text-white" href="{{ route('cicles.create') }}">Afegir Cicle</a>
            </li>
          @endif

          <!-- Logout Button -->
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
              @csrf
              <button type="submit" class="btn btn-outline-light">Sortir</button>
            </form>
          </li>
        @endauth
      </ul>

      <!-- Aixo el vaig buscar per internet, es per quan no esté registrat em surti el botó -->
      @guest
        <a href="{{ route('register') }}" class="btn btn-light ms-auto">Registrar-se</a>
      @endguest
    </div>
  </div>
</nav>








