<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

<div class="lightbox-gallery">
    <div class="container">
        <div class="row photos">
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ Storage::disk('s3')->url('images/reclama1.jpg') }}"
                                                            data-lightbox="photos"><img class="img-fluid"
                                                                                        src="{{ Storage::disk('s3')->url('images/reclama1.jpg') }}"></a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ Storage::disk('s3')->url('images/reclama1.jpg') }}"
                                                            data-lightbox="photos"><img class="img-fluid"
                                                                                        src="{{ Storage::disk('s3')->url('images/reclama1.jpg') }}"></a>
            </div>
        </div>
    </div>
</div>
