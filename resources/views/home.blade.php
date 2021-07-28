@extends('layouts.app')

@section('content')

@include('layouts.navbar')


<section id="home">
    <div class="container">

        @if ($message = Session::get('success'))
        <div class="alert alert-primary">
            {{ $message }}
        </div>
        @endif

        <div class="text-center">
            <h2 class="text-bold">Explore Story People.</h2>
        </div>

        <div class="row">
            @foreach ($post as $item)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h3>{{ $item->title }}</h3>
                        <hr>
                        <p>{{ $item->body }}</p>
                        <hr>
                        <h5>Author : {{ $item->user->name }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


@endsection