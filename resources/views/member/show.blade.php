@extends('layouts.app')

@section('title', $title)

@section('content')

<section>
    <div class="container">
        <div class="row justify-content-center">
            <h5>Story : {{ $name }}</h5>
            <div class="col-8">
                @foreach ($post as $item)
                <div class="card my-3 shadow-sm">
                    <div class="card-body">
                        <h5>{{ $item->title }}</h5>
                        <hr>
                        <p>{{ $item->body }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection