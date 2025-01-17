@include('base')
<div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center bg-light">
    <div class="row w-100">
        <div class="col-md-4 offset-md-4">
            <div class="card shadow-lg">
                <div class="card-header text-center bg-dark text-white">
                    <h4>Login</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Username Field -->
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Username" id="email" class="form-control" name="email"
                                   required autofocus>
                        </div>

                        <!-- Password Field -->
                        <div class="form-group mb-3">
                            <input type="password" placeholder="Password" id="password" class="form-control"
                                   name="password" required>
                            @if ($errors->has('emailPassword'))
                                <span class="text-danger">{{ $errors->first('emailPassword') }}</span>
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-dark btn-block">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('partial.footer')

