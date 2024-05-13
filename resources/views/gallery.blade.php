@include('base')
<div class="card">
    @include('partial/gallery')
    <div class="card-body">
        <h5 class="card-title">Galerie foto</h5>
        <p class="card-text">Cateva poze din interiorul spatiului de joaca</p>
        <a href="{{ route('rezervari') }}" class="btn btn-primary">Fa o rezervare</a>
    </div>
</div>

@include('partial.footer')
