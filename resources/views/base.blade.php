@include('partial/header')
<div class="container ">
    @include('partial/navigation')

    <div class="row align-items-md-stretch">
        {{--            <div class="col-md-6">--}}
        {{--                <div class="h-100 p-5 text-bg-dark rounded-3">--}}
        {{--                    <h2>Dark background</h2>--}}
        {{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p>--}}
        {{--                    <button class="btn btn-outline-light" type="button">Example button</button>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        <div class="col-md-12">
            <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                @include('partial/gallery')

            </div>
        </div>
    </div>
