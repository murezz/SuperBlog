@extends('layouts.app')

@section('title', 'Create Blog')

@section('content')

<section>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card shadow-sm mt-5">

                <div class="card-header text-center text-uppercase">
                    <h5 class="mt-2">{{ __('Create blog') }}</h5>
                </div>

                <div class="card-body">
                    <form action="{{ route('post.store') }}" method="post">
                        @csrf

                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                        <div class="mb-3">
                            <label for="title" class="form-label">title blog</label>
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control  @error('body') is-invalid @enderror" name="body"
                                placeholder="Leave a comment here" id="body" style="height: 500px"
                                value="{{ old('body') }}" required autocomplete="body" autofocus></textarea>
                            <label for="body">Comments</label>

                            @error('body')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <button type="submit" class="btn btn-primary">submit</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>
    </div>
</section>

@endsection