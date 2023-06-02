@extends('layouts.center-layout')

@section('centerTitle')
    Make-Appiontment
@endsection

@section('re-style')
@endsection
@section('cont')

<table class="table" style="margin-bottom: 60%">
    <h1 style="margin-left: 600px">All Bookings</h1>
    
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Service</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">phone</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col">User Id</th>
        <th scope="col">Updated At</th>
      </tr>
    </thead>
    <tbody>
        @foreach ( $bookings as $booking )
      <tr>
        <th scope="row">{{ $booking->id }}</th>
        <td>{{ $booking->service }}</td>
        <td>{{ $booking->first_name }}</td>
        <td>{{ $booking->last_name }}</td>
        <td>{{ $booking->phone }}</td>
        <td>{{ $booking->date }}</td>
        <td>{{ $booking->time }}</td>
        <td>{{ $booking->user_id }}</td>
        <td>{{ $booking->updated_at }}</td>
      </tr>
      @endforeach
    </tbody>
    
  </table>

  @endsection