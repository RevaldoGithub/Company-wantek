@extends('homepage.layouts')
@section('gallery')
active
@endsection
@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" style="width: 1490px; margin-left: -98px;" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-1 text-white animated slideInDown">Gallery</h1>
        <nav aria-label="breadcrumb animated slideInDown">
        </nav>
    </div>
</div>
<!-- Page Header End -->
<!-- Start Portfolio Section -->
<section id="portfolio" class="portfolio-section-1">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Gallery</h4>
            <h1 class="display-5 mb-4">Portfolio Kami</h1>
        </div>
        <div class="row">
            <div class="col-md-12">

                <!-- Start Portfolio items -->
                <ul id="portfolio-list">
                    @foreach($gallery as $gl)
                    <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">
                        <div class="portfolio-item">
                            <img src="{{ asset('storage/' . $gl->image) }}" class="img-responsive" alt="" />
                            <div class="portfolio-caption">
                                <h4>{{ $gl->judul }}</h4>
                                <p>{{ $gl->content }}</p>
                                <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-magic"></i></a>
                                <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <!-- End Portfolio items -->
            </div>
        </div>
    </div>
</section>
<!-- End Portfolio Section -->
@endsection