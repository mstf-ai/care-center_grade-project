@extends('layouts.center-layout')

@section('centerTitle')
    My Profile-CareCenter
@endsection

@section('re-style')
@endsection
@section('cont')

<style>
    .title{
    font-size: 22px;
    font-weight: 800;
    
}

.hide{
    display: none;
}

.avatar{
    margin: 25px 0;
}
</style>

    <section class="vh-100" style="background-color: #f4f5f7;" id="pro">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-6 mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">
                            <div class="col-md-12 p-3 gradient-custom text-center text-white"
                                style="border-top-left-radius: .5rem; border-top-right-radius: .5rem;">
                                <img src="@if (!filter_var(Auth::user()->avatar, FILTER_VALIDATE_URL)) {{ Voyager::image(Auth::user()->avatar) }}@else{{ Auth::user()->avatar }} @endif"
                                    class="avatar"
                                    style="border-radius:50%; width:150px; height:150px; border:2px solid #fff;"
                                    alt="{{ Auth::user()->name }} avatar">
                                <h5>{{ Auth::user()->name }}</h5>
                                <p></p>
                                <h6 class="title" style="background-color: #f4f5f7; 
                                width: 10em; margin:auto; border-radius: 10px;">
                                    Offline Now
                                </h6><br>
                                @if ($route = 'profile')
                                    <a href="{{ $route }}" class="btn btn-success " class="border-radu">{{ __('voyager::profile.edit') }}</a>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <div class="card-body p-5">
                                    <h6>Information</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Email</h6>
                                            <p class="text-muted">{{ Auth::user()->email }}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Phone</h6>
                                            <p class="text-muted"></p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Gender</h6>
                                            <p class="text-muted">Male</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <br><br><br>
@endsection
