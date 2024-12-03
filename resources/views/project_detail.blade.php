@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/dist/assets/owl.theme.default.min.css') }}">

<style>
    .section-image-cover{
        background: url(../img/projects/{{ $cover }}) !important;
        background-repeat: no-repeat !important;
        background-size: cover !important;
        background-attachment: fixed !important;
        background-position:center center !important;
        padding: 60vh 0px 80px 30px !important;
    }
</style>
@endpush

@section('content')

<section class="section-image-cover">
    <div class="container position-relative">
        <div class="row">
            <div class="col-md-6">
                <h2 class="h3 offset-title">{{ $project_name }} <span class="dot"></span></h2>
            </div>
        </div>

        <div class="content-block-overlay">
            <p>{{ $description }}</p>
        </div>
    </div>
</section>

<section class="section-content pb-5 mb-0">
    <div class="container">
        <div class="row align-items-center">
            @foreach($gallery_main as $g_img)
            <div class="col-sm-12 col-lg-6 mb-4">
                <img width="100%" src="{{ asset('img/projects/' . $g_img['img']) }}" alt="{{ $g_img['title'] }}">
            </div>
            @endforeach
        </div>
        <div class="row align-items-center">
            @foreach($gallery_secondary as $g_img)
            <div class="col-sm-6 col-lg-6 mb-4">
                <img width="100%" src="{{ asset('img/projects/' . $g_img['img']) }}" alt="{{ $g_img['title'] }}">
            </div>
            @endforeach
        </div>
        <div class="row align-items-center">
            @foreach($gallery as $g_img)
            <div class="col-sm-6 col-lg-4 mb-4">
                <img width="100%" src="{{ asset('img/projects/' . $g_img['img']) }}" alt="{{ $g_img['title'] }}">
            </div>
            @endforeach
        </div>
    </div>
</section>

<div class="text-center mb-5">
    <a href="{{ route('projects') }}" class="btn btn-primary">Regresar a proyectos</a>
</div>

{{--  
<section class="section-image-separator">
    <div class="container">
        <div class="row">
            <div class="col-md-6 position-relative">
                <div class="separator-border-wrap">
                    <h2 class="h4">Cada proyecto pensado para responder a tu visión arquitectónica <span class="dot"></span></h2>
                </div>
            </div>
        </div>
    </div>
</section>
--}}

@include('layouts.includes.clients_marquee')

{{--  
<section class="section-content text-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 offset-md-3 mb-5">
                <h5 class="h4">Un titulo con contenido</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-md-6 offset-md-3">
                <img width="100%" src="{{ asset('img/process-1.png') }}" alt="">
            </div>
        </div>
    </div>
</section>

@include('layouts.includes.testimonials')
--}}

@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
@endpush
