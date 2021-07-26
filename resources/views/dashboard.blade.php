@extends('layouts.app')


@section('content')

@include('layouts.navbar')

<section class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-4">
                <div class="desc mt-5">
                    <h1 class="text-bold">Write your story on <span class="text-primary">SuperBlog</span> now.</h1>
                    <p class="fs-5 mt-4 mb-5 col-8">
                        Temukan banyak cerita dan pengalaman dari pengguna SuperBlog.
                    </p>
                    <a href="" class="btn-custom shadow me-4">Started Now</a>
                    <a href="" class="btn-outline-custom">Explore</a>
                </div>
            </div>
            <div class="col-md-6 mt-5">
                <div class="image-dashboard">
                    <img src="img/img-landing.svg" width="500px" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection