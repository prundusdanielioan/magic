<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
<form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('chat')}}">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" id="title" name="title" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
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
