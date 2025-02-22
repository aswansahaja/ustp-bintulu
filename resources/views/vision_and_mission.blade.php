@extends('layouts.app')
@section('content')
    <section>
        <!-- Hero Start -->
        <div class="container-fluid bg-primary py-5 hero-header mb-5">
            <div class="row py-3">
                <div class="col-12 text-center">
                    <h1 class="display-3 text-white animated zoomIn">{{ __('VISI') }}</h1>
                    <h1 class="display-8 text-white animated zoomIn">{{ __('MELESTARIKAN SISTEM PENDIDIKAN YANG BERKUALITI UNTUK MEMBANGUNKAN POTENSI INDIVIDU BAGI MEMENUHI ASPIRASI NEGARA') }}</h1>
                    <h1 class="display-3 text-white animated zoomIn">{{ __('MISI') }}</h1>
                    <h1 class="display-8 text-white animated zoomIn">{{ __('PENDIDIKAN BERKUALITI INSAN TERDIDIK NEGARA SEJAHTERA') }}</h1>
                    <h1 class="display-3 text-white animated zoomIn">{{ __('NILAI') }}</h1>
                    <h1 class="display-8 text-white animated zoomIn">{{ __('PROFESIONAL.INTEGRITI.MESRA') }}</h1>
                    <h1 class="display-3 text-white animated zoomIn">{{ __('MATLAMAT') }}</h1>
                    <h1 class="display-8 text-white animated zoomIn">{{ __('BINTULU PENERAJU TRANSFORMASI PENDIDIKAN SARAWAK TAHUN 2030') }}</h1>
                    <h1 class="display-3 text-white animated zoomIn">{{ __('SLOGAN') }}</h1>
                    <h1 class="display-8 text-white animated zoomIn">{{ __('SHINE BINTULU SHINE') }}</h1>
                    <h1 class="display-3 text-white animated zoomIn">{{ __('MOTTO') }}</h1>
                    <h1 class="display-8 text-white animated zoomIn">{{ __('MEMPERKASAKAN PENDIDIKAN MELESTARIKAN KEMENJADIAN MURID') }}</h1>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- About Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="section-title mb-4">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                            <h1 class="display-5 mb-0">The World's Best Dental Clinic That You Can Trust</h1>
                        </div>
                        <h4 class="text-body fst-italic mb-4">Diam dolor diam ipsum sit. Clita erat ipsum et lorem stet no
                            lorem sit clita duo justo magna dolore</h4>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                            amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                            clita duo justo et tempor eirmod magna dolore erat amet</p>
                        <div class="row g-3">
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                                <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Award Winning</h5>
                                <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Professional Staff
                                </h5>
                            </div>
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                                <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>24/7 Opened</h5>
                                <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Fair Prices</h5>
                            </div>
                        </div>
                        <a href="appointment.html" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn"
                            data-wow-delay="0.6s">Make Appointment</a>
                    </div>
                    <div class="col-lg-5" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                                src="img/about.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Newsletter Start -->
        <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
            <div class="container">
                <div class="bg-primary p-5">
                    <form class="mx-auto" style="max-width: 600px;">
                        <div class="input-group">
                            <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                            <button class="btn btn-dark px-4">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i
                class="bi bi-arrow-up"></i></a>
    </section>
@endsection
