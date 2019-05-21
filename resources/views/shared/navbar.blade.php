<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @Auth
            <li class="nav-item">
                <a class="nav-link" href="/">Inicio </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/expenseReport">Gastos</a>
            </li>

            @endauth
        </ul>
        @guest
        <div class="nav-item m-2">
            <a class="text-white" href="{{ route('login') }}">{{ __('Iniciar sesion') }}</a>
        </div>
        @if (Route::has('register'))
        <div class="nav-item m-2">
            <a class="text-white" href="{{ route('register') }}">{{ __('Registrate') }}</a>
        </div>
        @endif
        @endguest
        @Auth
        <div class="nav-item dropdown">
            <a id="navbarDropdown" class="text-white no-decorate" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                Hola {{ Auth::user()->name }} <span class="fa fa-sort-down"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                    {{ __('Salir') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
        @endauth
        <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
    </div>
</nav>