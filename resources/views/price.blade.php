@extends('layouts.center-layout')

@section('centerTitle')
    PricesPage
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
                <h1 class="display-3 text-white animated zoomIn">Pricing</h1>
                <a href="/" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="price" class="h4 text-white">Pricing</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Pricing Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-warning text-uppercase">Pricing Plan</h5>
                        <h1 class="display-5 mb-0">We Offer Fair Prices for Nutrition Follow-up</h1>
                    </div>
                    <p class="mb-4"></p>
                    <h5 class="text-uppercase text-warning wow fadeInUp" data-wow-delay="0.3s">Call for Appointment</h5>
                    <h1 class="wow fadeInUp" data-wow-delay="0.6s">+02 0109 780 0835</h1>
                </div>
                <div class="col-lg-7">
                    <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/icon.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle"
                                    style="z-index: 2;">
                                    <h2 class="text-warning m-0">250 LE</h2>
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-warning py-5 p-4">
                                <h4>1 Month</h4>
                                <hr class="text-warning w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>Modern Methods</span><i
                                        class="fa fa-check text-warning pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Professional Nutritionist</span><i
                                        class="fa fa-check text-warning pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span>24/7 Call Support</span><i
                                        class="fa fa-check text-warning pt-1"></i></div>
                                <a href="appointment"
                                    class="btn btn-warning py-2 px-4 position-absolute top-100 start-50 translate-middle">Appointment</a>
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/icon.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle"
                                    style="z-index: 2;">
                                    <h2 class="text-warning m-0">1000 LE</h2>
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-warning py-5 p-4">
                                <h4>6 Month</h4>
                                <hr class="text-warning w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>Modern Methods</span><i
                                        class="fa fa-check text-warning pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Professional Nutritionist</span><i
                                        class="fa fa-check text-warning pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span>24/7 Call Support</span><i
                                        class="fa fa-check text-warning pt-1"></i></div>
                                <a href="appointment"
                                    class="btn btn-warning py-2 px-4 position-absolute top-100 start-50 translate-middle">Appointment</a>
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/icon.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle"
                                    style="z-index: 2;">
                                    <h2 class="text-warning m-0">1500 LE</h2>
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-warning py-5 p-4">
                                <h4>1 Year</h4>
                                <hr class="text-warning w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>Modern Methods</span><i
                                        class="fa fa-check text-warning pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Professional Nutritionist</span><i
                                        class="fa fa-check text-warning pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span>24/7 Call Support</span><i
                                        class="fa fa-check text-warning pt-1"></i></div>
                                <a href="appointment"
                                    class="btn btn-warning py-2 px-4 position-absolute top-100 start-50 translate-middle">Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->
    <br><br><br><br>
@endsection
