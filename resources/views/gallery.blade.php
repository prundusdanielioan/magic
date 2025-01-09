@include('base')
<div class="card">
    @include('partial/gallery')
    <div class="card-body d-flex flex-column align-items-start">
        <a href="{{ route('rezervari') }}" class="btn btn-primary mt-auto align-self-center">Fa o rezervare</a>
    </div>
</div>

@include('partial.footer')
