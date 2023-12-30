@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center text-center">
{{--
            <div class="col-sm-6">
                <small class="text-success align-middle">Hi, my name is</small>
                <h1 class="" style="font-size: 55px">Murunya Saina</h1>
                <h5 class="text-secondary" style="font-size: 20px">Software Developer | DevOps Engineer</h5>
                <div class="mt-4">
                    <button class="btn btn-success">Resume</button>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mx-auto d-block" style="width: 17rem;">
                    <img src="{{ url('/images/saina.jpeg') }}" class="card-img-top img-fluid" alt="portfolio-image" style="border-radius: 50%; transform: rotate(43deg)">
                </div>
            </div>
--}}
            <div class="col hero-text">
                <h1 class="fw-bold" style="font-size: 55px">Software Developer & DevOps Engineer</h1>
                <h3 style="color: aquamarine">I design and code beautifully simple things, and I love what I do.</h3>
            </div>
        </div>
    </div>
@endsection
