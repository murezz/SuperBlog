@extends('layouts.app')

@section('content')

<section class="py-5">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card shadow-sm mt-5">

                <div class="card-header text-center text-uppercase">
                    <h5 class="mt-2">{{ __('register') }}</h5>
                </div>

                <div class="card-body">
                    <form action="{{ route('register') }}" method="post">
                        @csrf


                        <div class="mb-3">
                            <label for="name" class="form-label">Fullname</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="jobs" class="form-label">Jobs</label>
                            <input id="jobs" type="text" class="form-control @error('jobs') is-invalid @enderror"
                                name="jobs" value="{{ old('jobs') }}" required autocomplete="jobs" autofocus>

                            @error('jobs')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                value="{{ old('password') }}" required autocomplete="password" autofocus>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="my-2">
                            <button type="submit" class="btn btn-primary">Registrasi Account</button>
                        </div>

                    </form>

                    <div class="text-center">
                        <p>sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection