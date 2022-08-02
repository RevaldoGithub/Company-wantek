@extends('homepage.layouts')
@section('service')
active
@endsection
@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" style="width: 1490px; margin-left: -98px;" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-1 text-white animated slideInDown">Service</h1>
        <nav aria-label="breadcrumb animated slideInDown">
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Our Services</h4>
            <h1 class="display-5 mb-4">Kita Menyediakan Layanan yang elegan dan murah</h1>
        </div>
        <div class="row g-4">
            @foreach( $services as $svs)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{ asset('storage/' . $svs->img) }}" alt="">
                    <div class="service-text p-5">
                        <!-- <img class="mb-4" src="../assets/img/icons/icon-5.png" alt="Icon"> -->
                        <h3 class="mb-3">{!! $svs->judul !!}</h3>
                        <p class="mb-4">{!! $svs->content !!}</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Testimonial</h4>
            <h1 class="display-5 mb-4">Thousands Of Customers Who Trust Us And Our Services</h1>
        </div>

        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            @foreach( $testimonial as $tst )
            <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='{{ asset('storage/' . $tst->image) }}' alt=''>">
                <p class="fs-5">{!! $tst->testimonial !!}</p>
                <h3>{{ $tst->name }}</h3>
                <span class="text-primary">{{ $tst->agency }}</span>
            </div>
            @endforeach
        </div>

    </div>
</div>
<!-- Testimonial End -->

@endsection