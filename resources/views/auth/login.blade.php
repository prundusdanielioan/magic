@include('base')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group mb-3">
        <input type="text" placeholder="Email" id="email" class="form-control" name="email" required autofocus>
    </div>

    <div class="form-group mb-3">
        <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
        @if ($errors->has('emailPassword'))
            <span class="text-danger">{{ $errors->first('emailPassword') }}</span>
        @endif
    </div>


    <div class="d-grid mx-auto">
        <button type="submit" class="btn btn-dark btn-block">Login</button>
    </div>
</form>
@include('partial.footer')

