@extends('layouts.app')

@section('title', 'People')

@section('content')

@include('layouts.navbar')


<section>
    <div class="container">
        <div class="text-center mb-5">
            <div class="col-6">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>

        <div class="row">
            @foreach ($people as $item)
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="photo/{{ $item->photo }}" class="border border-primary rounded-circle mb-3"
                                style="margin-top: -35px" width="70" height="70" alt="">
                            <h5 class="text-bold">{{ $item->name }}</h5>
                            <h6>{{ $item->jobs }}</h6>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


@endsection