<div>
    <img src="{{ asset('storage/images/banner/banner.png') }}"
         alt="Banner Image"
         style="width: 100%; height: 100%; object-fit: cover;">
</div>
<nav class="navbar navbar-icon-top navbar-expand-lg">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item active me-4">
                <a class="nav-link" href="/">
                    <i class="fa fa-home"></i>
                    Acasa
                    <span class="sr-only">(current)</span>
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


            @if (Auth::check())
                <li class="nav-item me-4">
                    <a class="nav-link" href="{{ route('list') }}">
                        <i class="fa fa-file-image-o">
                            <span class="badge badge-danger"></span>
                        </i>
                        Lista rezervari
                    </a>
                </li>

                <li class="nav-item me-4">
                    <a class="nav-link" href="{{ route('logout') }}">
                        <i class="fa fa-sign-out"></i>
                        Logout
                    </a>
                </li>
            @else
                <li class="nav-item me-4">
                    <a class="nav-link" href="{{ route('rezervari') }}">
                        <i class="fa fa-envelope-o">
                            <span class="badge badge-danger"></span>
                        </i>
                        Rezervari
                    </a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="{{ route('login') }}">
                        <i class="fa fa-sign-in"></i>
                        Login
                    </a>
                </li>
            @endif
        </ul>
    </div>
</nav>
