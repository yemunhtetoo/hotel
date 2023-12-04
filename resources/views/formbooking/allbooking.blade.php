@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <div class="mt-5">
                        <h4 class="card-title float-left mt-2">Appointments</h4>
                        <a href="{{route('form/booking/add')}}" class="btn btn-primary float-right veiwbutton ">Add Booking</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body booking_card">
                        <div class="table-responsive">
                            <table class="datatable table table-stripped table table-hover table-center mb-0">
                                <thead>
                                    <tr>
                                        <th>Booking ID</th>
                                        <th>Name</th>
                                        <th>Room Type</th>
                                        <th>Total Numbers</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Arrival Date</th>
                                        <th>Depature Date</th>
                                        <th>Email ID</th>
                                        <th>Ph.Number</th>
                                        <th>Status</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allBookings as $booking)
                                        <tr>
                                            <td>{{$booking->bkg_id}}</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{url('/assets/upload/'.$booking->fileupload)}}" alt="User Image"></a>
                                                    <a href="profile.html">{{$booking->name}} <span>{{$booking->bkg_id}}</span></a>
                                                </h2>
                                            </td>
                                            <td>{{$booking->room_type}}</td>
                                            <td>{{$booking->total_numbers}}</td>
                                            <td>{{$booking->date}}</td>
                                            <td>{{$booking->time}}</td>
                                            <td>{{$booking->arrival_date}}</td>
                                            <td>{{$booking->departure_date}}</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fb9f9a8d929f9a978d9a899e81bb9e839a968b979ed5989496">{{$booking->email}}</a></td>
                                            <td>{{$booking->ph_number}}</td>
                                            <td>
                                                <div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Active </a> </div>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-booking.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="delete_asset" class="modal fade delete-modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center"> <img src="{{url('assets/img/sent.png')}}" alt="" width="50" height="46">
                    <h3 class="delete_class">Are you sure want to delete this Asset?</h3>
                    <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

