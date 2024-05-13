<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Prima pagina</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('rezervari') }}">Rezervari</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/gallery">Galerie</a>
                </li>
                @auth
                    <li><a class="nav-link active" href="{{ route('logout') }}">Logout</a></li>

                @endauth
                @guest
                    <li><a class="nav-link active" href="{{ route('login') }}">Login</a></li>

                @endguest
            </ul>
        </div>
    </div>
</nav>
