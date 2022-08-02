@extends('homepage.layouts')
@section('about')
active
@endsection
@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" style="width: 1490px; margin-left: -98px;" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-1 text-white animated slideInDown">Abouts US</h1>
        <nav aria-label="breadcrumb animated slideInDown">
        </nav>
    </div>
</div>
<!-- Page Header End -->
<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            @foreach( $about as $bt)
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img">
                    <img class="img-fluid" src="{{ asset('storage/' . $bt->image) }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h4 class="section-title">About Us</h4>
                <h1 class="display-5 mb-4">{{ $bt->judul}}</h1>
                <p>{!! $bt->content !!}</p>
                <div class="d-flex align-items-center mb-5">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center border border-5 border-primary" style="width: 120px; height: 120px;">
                        <h1 class="display-1 mb-n2" data-toggle="counter-up">{{ $bt->tahun }}</h1>
                    </div>
                    <div class="ps-4">
                        <h3>Years</h3>
                        <h3>Working</h3>
                        <h3 class="mb-0">Experience</h3>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5" href="">Read More</a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- About End -->


<!-- Feature Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h4 class="section-title">Why Choose Us!</h4>
                <h1 class="display-5 mb-4">Why You Should Trust Us? Learn More About Us!</h1>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="d-flex align-items-start">
                            <img class="flex-shrink-0" src="img/icons/icon-2.png" alt="Icon">
                            <div class="ms-4">
                                <h3>Design Approach</h3>
                                <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-start">
                            <img class="flex-shrink-0" src="img/icons/icon-3.png" alt="Icon">
                            <div class="ms-4">
                                <h3>Innovative Solutions</h3>
                                <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-start">
                            <img class="flex-shrink-0" src="img/icons/icon-4.png" alt="Icon">
                            <div class="ms-4">
                                <h3>Project Management</h3>
                                <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="feature-img">
                    <img class="img-fluid" src="img/about-2.jpg" alt="">
                    <img class="img-fluid" src="img/about-1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->

@endsection