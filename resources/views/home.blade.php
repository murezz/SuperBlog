@extends('layouts.app')

@section('title', $title)

@section('content')

@include('layouts.navbar')


<section id="home">
    <div class="container">

        @if ($message = Session::get('success'))
        <div class="alert bg-custom text-white">
            {{ $message }}
        </div>
        @endif

        <div class="text-center">
            <h2 class="text-bold">Explore Story People.</h2>
        </div>

        <div class="row">
            @foreach ($post as $item)
            <div class="col-md-4 mb-3 py-3">
                <div class="card card-hover shadow-sm">
                    <div class="card-body">
                        <a href="/story/{{ $item->slug }}">
                            <h5 class="text-bold">{{ $item->title }}</h5>
                        </a>
                        {{-- <p>{{ $item->body }}</p> --}}

                        <hr>
                        <a href="/author/{{ $item->user->username }}">
                            <p>By : {{ $item->user->name }}</p>
                        </a>

                        {{-- <div class="row">
                                <div class="col-2">
                                    <img src="photo/{{ $item->user->photo }}" width="50" height="50"
                        class="rounded-circle" alt="">
                    </div>
                    <div class="col-10">
                        <h6 class="text-bold">{{ $item->user->name }}</h6>
                        <p>{{ $item->user->jobs }}</p>
                    </div>
                </div> --}}
            </div>
        </div>

    </div>
    @endforeach
    </div>
    </div>
</section>


@endsection