@extends('layouts.center-layout')

@section('centerTitle')
    About-CareCenter
@endsection

@section('re-style')
@endsection
@section('cont')
    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-warning p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-warning px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-warning py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">About Us</h1>
                <a href="/" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="about" class="h4 text-white">About</a>
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
                        <h5 class="position-relative d-inline-block text-warning text-uppercase">About Us</h5>
                        <h1 class="display-5 mb-0">{{setting('site.description')}}</h1>
                    </div>
                    <h4 class="text-body fst-italic mb-4">
                        </p><br>
                        <div class="row g-3">
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                                <h5 class="mb-3"><i class="fa fa-check-circle text-warning me-3"></i>Award Winning
                                </h5>
                                <h5 class="mb-3"><i class="fa fa-check-circle text-warning me-3"></i>Professional
                                    Staff
                                </h5>
                            </div>
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                                <h5 class="mb-3"><i class="fa fa-check-circle text-warning me-3"></i>24/7 Opened
                                </h5>
                                <h5 class="mb-3"><i class="fa fa-check-circle text-warning me-3"></i>Fair Prices
                                </h5>
                            </div>
                        </div>
                        <a href="appointment" class="btn btn-warning py-3 px-5 mt-4 wow zoomIn" data-wow-delay="0.6s">Make
                            Appointment</a>
                </div>
                <div class="col-xl-4 col-lg-4 wow slideInUp" id="image">
                    <img src="img/about.png" alt="" height="100%" width="100%">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
<br><br><br><br>


@endsection
