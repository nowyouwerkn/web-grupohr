@extends('layouts.main')

@push('styles')

@endpush

@section('content')
<section class="section-projects">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="project-title">
                    <h3 class="h3 offset-title mb-5">Conoce <w>nuestros</w> proyectos <span class="dot"></span></h3>
                    <p>Si tienes una visión, la construiremos. Desde proyectos modulares hasta proyectos personalizados, todos perfectamente sostenibles. Cada proyecto pensado para responder a tu visión arquitectónica.</p>
                </div>
            </div>

            <div class="col-md-8">
                <div class="projects-cards-gallery">
                    <div class="project-card-wrap">
                        <img class="parallax" data-rellax-scroll="2" src="{{ asset('img/about-us-1.png') }}" alt="">
                    </div>
                    <div class="project-card-wrap">
                        <img class="parallax" data-rellax-scroll="2" src="{{ asset('img/about-us-1.png') }}" alt="">
                    </div>
                    <div class="project-card-wrap">
                        <img class="parallax" data-rellax-scroll="2" src="{{ asset('img/about-us-1.png') }}" alt="">
                    </div>
                    <div class="project-card-wrap">
                        <img class="parallax" data-rellax-scroll="2" src="{{ asset('img/about-us-1.png') }}" alt="">
                    </div>
                    <div class="project-card-wrap">
                        <img class="parallax" data-rellax-scroll="2" src="{{ asset('img/about-us-1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
@endpush
