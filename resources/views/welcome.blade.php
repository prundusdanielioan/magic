@include('base')
<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <img src="{{ asset('storage/images/logo/12.jpg') }}" alt="Instructor și elev" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
            <img src="{{ asset('storage/images/logo/about.png') }}"
                 style="width: 100%; height: 100%; object-fit: cover;">
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 center">
                <img src="{{ asset('storage/images/logo/prices.png') }}">
            </div>
        </div>
    </div>
</div>@include('partial.footer')

