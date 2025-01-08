<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('storage/logo.png') }}" alt="Logo" style="height: 30px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('menu') }}">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('menu2') }}">Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('configuracion') }}">Configuración</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">Salir</a></li>
            </ul>
            <span class="navbar-text ml-auto">
                Hola, {{ Auth::user()->name }}
            </span>
        </div>
    </nav>
</header>
