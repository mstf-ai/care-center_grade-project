@extends('layouts.app')

@section('content')
<div class="container bg-success" style="padding: 30px ; border-radius: 20px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in Now! -- Back to - ') }}<a href="/" class="btn btn-warning text-dark" style="font-weight: 800;">Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br>
@endsection
