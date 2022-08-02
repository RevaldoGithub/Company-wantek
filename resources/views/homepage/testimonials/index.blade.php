@extends('homepage.layouts')
@section('testi')
active
@endsection
@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" style="width: 1490px; margin-left: -98px;" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-1 text-white animated slideInDown">Testimonial</h1>
        <nav aria-label="breadcrumb animated slideInDown">
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Testimonial</h4>
            <h1 class="display-5 mb-4">Thousands Of Customers Who Trust Us And Our Services</h1>
        </div>

        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            @foreach( $testimonial as $tstl )
            <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='{{ asset('storage/' . $tstl->image) }}' alt=''>">
                <p class="fs-5">{!! $tstl->testimonial !!}</p>
                <h3>{{ $tstl->name }}</h3>
                <span class="text-primary">{{ $tstl->agency }}</span>
            </div>
            @endforeach
        </div>

    </div>
</div>
<!-- Testimonial End -->
@endsection