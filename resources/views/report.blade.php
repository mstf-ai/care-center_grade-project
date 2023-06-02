@extends('layouts.center-layout')

@section('centerTitle')
    Report
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
                <h1 class="display-3 text-white animated zoomIn">Feedback</h1>
                <a href="/" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="report" class="h4 text-white">Feedback</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-warning bg-testimonial py-5 mb-5 wow fadeInUp" data-wow-delay="0.1s"
        style="margin-top: 90px;">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <form method="POST" action="{{ route('problem.store') }}">
                        @csrf
                        <div class="bg-dark d-flex flex-column p-5" style="height: 300px; width: 500px;">
                            <h3 class="text-white mb-3">Send A Feedback</h3>
                            <div class="date mb-3" id="date" data-target-input="nearest">
                                <textarea name="problem" class="form-control bg-light border-0" style="resize: none;" placeholder="Add Your Feedback"></textarea>
                            </div>
                            <select name="topic" class="form-select bg-light border-0 mb-3" style="height: 40px;">
                                <option selected>Select A Topic</option>
                                <option value="Services">Services</option>
                                <option value="Nutritionists">Nutritionists</option>
                                <option value="Customer Service">Customer Service</option>
                                <option value="website">website</option>
                            </select>
                            <button type="submit" class="btn btn-light" >Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <br><br><br><br>
@endsection
