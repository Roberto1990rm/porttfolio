<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('inicio') }}" style="font-size: 24px;">@lang('messages.portfolio')</a>

        <!-- Botón de alternancia para dispositivos móviles -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="border: none; background: none;">
            <span class="navbar-toggler-icon" style="background-color: #00ffcc;"></span>
        </button>

        <!-- Enlaces de navegación principal -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('inicio') }}" style="font-size: 20px;">
                        <i class="fas fa-home"></i> <!-- Ícono de casa -->
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('inicio') }}#proyectos" style="font-size: 20px;">@lang('messages.proyectos')</a>
                </li>
                <li class="nav-item mt-1">
                    <a class="custom-button" href="{{ route('contacto') }}" style="background-color: #00ffcc; color: #000; font-size: 20px;">@lang('messages.contacto')</a>
                </li>
            </ul>
        </div>

        <!-- Enlaces de idioma (siempre visibles) -->
        <ul class="navbar-nav language-links">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('locale.set', 'es') }}" style="font-size: 20px;">
                    <span class="flag-icon flag-icon-es"></span> ES
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('locale.set', 'en') }}" style="font-size: 20px;">
                    <span class="flag-icon flag-icon-us"></span> EN
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('locale.set', 'pt') }}" style="font-size: 20px;">
                    <span class="flag-icon flag-icon-br"></span> PT
                </a>
            </li>
        </ul>
    </div>
</nav>

<style>
    /* Estilos para dispositivos móviles */
    @media (max-width: 991px) {
        .navbar-toggler {
            margin-top: 5px;
        }

        .navbar-nav {
            flex-direction: row;
            text-align: center;
        }

        .navbar-nav .nav-item {
            margin-right: 10px;
        }

        .language-links {
            background-color: transparent;
        }
    }
</style>
