@extends('layouts.app')

@section('content')

<section class="py-5">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card shadow-sm mt-5">

                <div class="card-header text-center text-uppercase">
                    <h5 class="mt-2">{{ __('login') }}</h5>
                </div>

                <div class="card-body">
                    <form action="{{ route('login') }}" method="post">
                        @csrf

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

                        <div class="mb-2">
                            <button type="submit" class="btn btn-primary">Log in</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection