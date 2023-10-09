<nav class="navbar navbar-expand  navbar-light " style="background-color: yellow;">
    <a class="navbar-brand" href="{{ route('inicio') }}">@lang('messages.portfolio')</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('locale.set', 'es') }}">
                    <span class="flag-icon flag-icon-es"></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('locale.set', 'en') }}">
                    <span class="flag-icon flag-icon-us"></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('locale.set', 'pt') }}">
                    <span class="flag-icon flag-icon-br"></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('inicio') }}">@lang('messages.inicio')</a>
            </li>
            
            <li class="nav-link">
                <a href="{{ route('inicio') }}#proyectos">@lang('messages.proyectos')</a>
            </li>
            <li class="nav-item mt-2">
                <a class="custom-button" href="{{ route('contacto') }}">@lang('messages.contacto')</a>
            </li>
        </ul>
    </div>
    
</nav>

