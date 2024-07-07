<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active me-4">
                <a class="nav-link" href="/">
                    <i class="fa fa-home "></i>
                    Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            @auth
            <li class="nav-item me-4">
                <a class="nav-link" href="{{ route('rezervari') }}">
                    <i class="fa fa-envelope-o">
                        <span class="badge badge-danger"></span>
                    </i>
                    Rezervari
                </a>
            </li>

                <li class="nav-item me-4">
                    <a class="nav-link" href="{{ route('gallery') }}">
                        <i class="fa fa-file-image-o">
                            <span class="badge badge-danger"></span>
                        </i>
                        Galerie
                    </a>
                </li>
            @endauth
            @if (Auth::check())
                <li class="nav-item me-4">
                    <a class="nav-link" href="{{ route('logout') }}">
                        <i class="fa fa-sign-out"></i>
                        Logout
                    </a>

                </li>
            @else
                <li class="nav-item me-4">
                    <a class="nav-link" href="{{ route('register') }}">
                        <i class="fa fa-user-circle-o"></i>
                        Register
                    </a>
                </li>

                <li class="nav-item me-4">
                    <a class="nav-link" href="{{ route('login') }}">
                        <i class="fa fa-sign-in"></i>
                        My Login
                    </a>
                </li>
            @endif

        </ul>
    </div>
</nav>
