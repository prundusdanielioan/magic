<nav class="navbar navbar-icon-top navbar-expand-lg">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('storage/images/logo/cio_logo.png') }}"
             alt="CIO" width="40" height="40" class="d-inline-block align-text-top"
             style="height: 40px; width: 150px; margin-right: 10px;">
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active me-4">
                <a class="nav-link" href="/">
                    <i class="fa fa-home "></i>
                    Acasa
                    <span class="sr-only">(current)</span>
                </a>
            </li>
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


        </ul>
    </div>
</nav>
