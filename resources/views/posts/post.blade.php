@extends('layouts.app')

@section('title', 'post')

@section('content')

@include('layouts.navbar')

<section>
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    {{-- <h4>Author By : {{ $post->user->name }}</h4> --}}
                    <div class="row">
                        <div class="col-2">
                            <img src="/photo/{{ $post->user->photo }}" width="50" height="50" class="rounded-circle"
                                alt="">
                        </div>
                        <div class="col-6">
                            <div style="margin-left: -40px">
                                <h6 class="text-bold mt-1">{{ $post->user->name }}</h6>
                                <p>{{ $post->user->jobs }}</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div style="margin-left: 85px">
                                <a href="" class="btn btn-outline-primary mt-1">
                                    Lokit Profile
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <article>
                        <h5 class="text-center mb-3">{{ $post->title }}</h5>
                        <p>{{ $post->body }}</p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection