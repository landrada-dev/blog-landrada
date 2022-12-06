<nav id="sectionsNav" class="navbar fixed-top  navbar-expand-lg " color-on-scrolli="100" >
    <div class="container">
        <div class="navbar-translate">
            <a class="brand-min" href="https://www.landrada.mx/">
                <img class="img" width="200px" src="{{ asset('landrada') }}/logo.png">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">{{ ('Toggle navigation') }}</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link mr-2" href="https://www.landrada.mx/">{{ __('Inicio')}} </a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link mr-2" href="https://www.landrada.mx/10-razones-para-invertir-en-tierra">{{ __('¿Por qué invertir en tierra?')}} </a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link mr-2" href="https://cotizador.landrada.mx/">{{ __('Cotizar')}} </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-2" href="https://www.landrada.mx/#contacto">{{ __(' Contáctanos')}} </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-2" href="https://landrada.mx/pagos/">{{ __(' Pago en línea')}} </a>
                </li>
                <li class="dropdown nav-item">
                    <a class="dropdown-toggle nav-link mr-2" href="#" data-toggle="dropdown">{{ __('Herramientas')}} </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        <a href="https://landrada.mx/" class="dropdown-item">
                            <i class="material-icons">layers</i> Calculadora financiera
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>