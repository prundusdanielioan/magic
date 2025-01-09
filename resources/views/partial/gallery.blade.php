<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

<div class="lightbox-gallery">
    <div class="container">
        <div class="row photos">
            @for ($i = 1; $i <= 11; $i++)
                <div class="col-sm-6 col-md-4 col-lg-3 item">
                    <a href="{{ asset('storage/images/gallery/' . $i . '.jpg') }}" data-lightbox="photos">
                        <img class="img-fluid" src="{{ asset('storage/images/gallery/' . $i . '.jpg') }}">
                    </a>
                </div>
            @endfor
        </div>
    </div>
</div>
