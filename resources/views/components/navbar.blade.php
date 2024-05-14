<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('inicio') }}" style="font-size: 24px;">@lang('messages.portfolio')</a>

        <!-- Botón de alternancia para dispositivos móviles -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
        data-bs-target="#navbarNav" aria-controls="navbarNav" 
        aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
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
    border: none;
    background: none;
}

.navbar-toggler-icon {
    background-color: #00ffcc;
    display: inline-block;
    width: 30px; /* Adjust the width as needed */
    height: 3px; /* Adjust the height as needed */
    position: relative;
}

.navbar-toggler-icon::before, .navbar-toggler-icon::after {
    background-color: #00ffcc;
    content: "";
    display: block;
    width: 30px; /* Same as the navbar-toggler-icon width */
    height: 3px; /* Same as the navbar-toggler-icon height */
    position: absolute;
    left: 0;
}

.navbar-toggler-icon::before {
    top: -10px; /* Adjust the distance as needed */
}

.navbar-toggler-icon::after {
    bottom: -10px; /* Adjust the distance as needed */
}

/* Adding the thick yellow border */
.navbar-toggler {
    padding: 5px; /* Adjust padding for size of the border */
    border: 4px solid yellow; /* Adjust border thickness and color */
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
