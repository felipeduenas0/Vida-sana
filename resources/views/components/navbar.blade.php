<nav class="navbar navbar-expand-md custom-nabvar">

    <div class="container">

        <a class="navbar-brand" href="/">
            <h5 class="text-black"><span class="fs-2" style="color: #ff0000;">Y2K</span> ¡Al mejor estilo!</h5>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                id="id-toggler">
            <i class="bi bi-list" id="icon-toggle"></i>
        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('start') ? 'link-active' : '' }}" aria-current="page"
                       href="/" id="link-home">Inicio
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('makeOrder') ? 'link-active' : '' }}" aria-current="page"
                       href="{{ url('/makeOrder/' . 1) }}" id="link-pedido">Haz tu pedido
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->path() == '/#contact' ? 'link-active' : '' }}"
                       aria-current="page"
                       href="{{url('/#contact')}}" id="link-pedido">Contactanos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('about') ? 'link-active' : '' }}" aria-current="page"
                       href="{{ url('/about') }}" id="link-pedido">Acerca de nosotros
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>
