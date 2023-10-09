<nav class="navbar navbar-expand-sm navbar-light bg-warning">
    <div class="container">
        <a class="navbar-brand" href="{{ route('inicio') }}">@lang('messages.portfolio')</a>
        
        <!-- Botón de alternancia para dispositivos móviles -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <!-- Enlaces de idioma -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('locale.set', 'es') }}">
                        <span class="flag-icon flag-icon-es"></span> ES
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('locale.set', 'en') }}">
                        <span class="flag-icon flag-icon-us"></span> EN
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('locale.set', 'pt') }}">
                        <span class="flag-icon flag-icon-br"></span> PT
                    </a>
                </li>
                
                <!-- Enlaces de navegación principal -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('inicio') }}">
                        <i class="fas fa-home"></i> <!-- Ícono de casa -->
                    </a>
                </li>
                
                <li class="nav-item mb10">
                    <a class="nav-link" href="{{ route('inicio') }}#proyectos">@lang('messages.proyectos')</a>
                </li>
                <li class="nav-item mt-2 mb10">
                    <a class="custom-button" href="{{ route('contacto') }}">@lang('messages.contacto')</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
