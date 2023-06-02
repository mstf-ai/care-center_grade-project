@extends('layouts.center-layout')

@section('centerTitle')
    Make-Appiontment
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
                <h1 class="display-3 text-white animated zoomIn">Appointment</h1>
                <a href="/" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="appointment" class="h4 text-white">Appointment</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Appointment Start -->
    <div class="row container-fluid bg-warning bg-appointment mb-5 wow fadeInUp align-items-center" data-wow-delay="0.1s"
        style="margin-top: 90px; height: 800px; background-image: url(../img/background.jpg)">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="display-5 text-white mb-4">We Are A Certified and Award Winning Nutrition Clinic You Can
                            Trust</h1>
                        <p class="text-white mb-0"></p>
                    </div>
                </div>
                {{--  --}}
                <div class="col-lg-6 ">
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                        data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Make Appointment</h1>
                        {{--  --}}
                        <form method="POST" action="{{ url('booking') }}">
                            @csrf
                            <div class="row g-3">
                                {{-- <input type="hidden" name="user_id" /> --}}
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" name="service" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="Obesity">Obesity</option>
                                        <option value="Thinness">Thinness</option>
                                        <option value="Nutrition of Pregnant women">Nutrition of Pregnant women</option>
                                        <option value="Nutrition of Lactating women">Nutrition of Lactating women</option>
                                        <option value="Nutrition of Diabetics Patient">Nutrition of Diabetics Patient
                                        </option>
                                        <option value="Nutrition of Pressure Patient">Nutrition of Pressure Patient</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" name="doctor" style="height: 55px;">
                                        <option selected>Select Doctor</option>
                                        <option value="Dr. Ahmed Morad">Dr. Ahmed Morad</option>
                                        <option value="Dr. Huda Mohsen">Dr. Huda Mohsen</option>
                                        <option value="Dr. Khaled Walid">Dr. Khaled Walid</option>
                                        <option value="Dr. Eman Helmy">Dr. Eman Helmy</option>
                                        <option value="Dr. Hany Ebrahiem">Dr. Hany Ebrahiem</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0"
                                        placeholder="Your First Name" name="first_name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0"
                                        placeholder="Your Last Name" name="last_name" style="height: 55px;">

                                </div>
                                <div class="col-14 col-sm-14">
                                    <input type="text" class="form-control bg-light border-0"
                                        placeholder="Your Phone Number" name="phone" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="Appointment Date" data-target="#date1" data-toggle="datetimepicker"
                                            name="date" style="height: 55px;" min="2023-03-04">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" name="time" style="height: 55px;">
                                        <option selected>Select Period</option>
                                        <option value="The first period">The first period ( 7 AM : 11 AM )</option>
                                        <option value="The second period">The second period ( 11 AM : 3 PM )</option>
                                        <option value="Third period">Third period ( 3 PM : 7 PM )</option>
                                        <option value="Fourth period">Fourth period ( 7 PM : 11 PM )</option>
                                    </select>
                                </div>
                                {{-- <div class="col-12 col-sm-6">
                                    <div class="time" id="time1" data-target-input="nearest">
                                        <input type="text" class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="Appointment Time" data-target="#time1"
                                            data-toggle="datetimepicker" name="time" style="height: 55px;">
                                    </div>
                                </div> --}}
                                @guest
                                    <div class="col-12">
                                        <a class="btn btn-dark w-100 py-3" href="login">Make Appointment</a>
                                    </div>
                                @else
                                    <div class="col-12">
                                        <button class="btn btn-dark w-100 py-3" type="submit">Make Appointment</button>
                                    </div>
                                    <div class="col-12">
                                        <a class="btn btn-dark w-100 py-3" href="{{ route('bookingreport') }}">Show Bookings</a>
                                    </div>
                                @endguest
                            </div>
                        </form>
                        {{--  --}}
                    </div>
                </div>
                {{--  --}}
                <div class="col-xl-4 col-lg-4 wow slideInUp" id="image1">
                    <img src="img/Appointment.png" alt="" height="95%" width="95%">
                </div>
            </div>
        </div>
    </div>

    <!-- Appointment End -->
    <br><br><br><br>
@endsection
