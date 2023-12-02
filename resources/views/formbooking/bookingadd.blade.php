@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title mt-5">Add Booking</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="{{url('form/booking/save')}}" method="post">@csrf
                    <div class="row formtype">
                    {{-- <div class="col-md-4">
                        <div class="form-group">
                            <label>Booking ID</label>
                            <input class="form-control" type="text" value="BKG-0001">
                        </div>
                    </div> --}}
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Name</label>
                            <select class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name">
                                <option>Select </option>
                                <option value="">Jennifer Robinson</option>
                                <option value="">Terry Baker</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Room Type</label>
                            <select class="form-control @error('room_type') is-invalid @enderror" name="room_type" value="{{ old('room_type') }}" >
                                <option value="">Select</option>
                                <option value="">Single</option>
                                <option value="">Double</option>
                                <option value="">Quad</option>
                                <option value="">King</option>
                                <option value="">Suite</option>
                                <option value="">Villa</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Total Members</label>
                            <select class="form-control @error('room_type') is-invalid @enderror" name="total_members" value="{{ old('total_members') }}">
                                <option>Select</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Date</label>
                            <div class="cal-icon">
                                <input type="text" class="form-control datetimepicker @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Time</label>
                            <div class="time-icon">
                                <input type="text" class="form-control @error('time') is-invalid @enderror" id="datetimepicker3" name="time" value="{{ old('time') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Arrival Date</label>
                            <div class="cal-icon">
                                <input type="text" class="form-control datetimepicker @error('arrival_date') is-invalid @enderror" name="arrival_date" value="{{ old('arrival_date') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Depature Date</label>
                            <div class="cal-icon">
                                <input type="text" class="form-control datetimepicker @error('departure_date') is-invalid @enderror" name="departure_date" value="{{ old('departure_date') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Email ID</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>File Upload</label>
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input @error('fileupload') is-invalid @enderror" id="customFile" name="fileupload" value="{{ old('fileupload') }}">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control @error('message') is-invalid @enderror" rows="5" id="comment" name="message" value="{{ old('message') }}"></textarea>
                        </div>
                    </div>
                    <div class="4">
                        <button type="submit" class="btn btn-primary buttonedit">Save</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
        
        </div>
    </div>
    @section('script')
    <script>
        $(function () {
            $('#datetimepicker3').datetimepicker({
                format: 'LT'
            });
            if($('.datetimepicker').length>0){$('.datetimepicker').datetimepicker({format:'DD/MM/YYYY',icons:{up:"fa fa-angle-up",down:"fa fa-angle-down",next:'fa fa-angle-right',previous:'fa fa-angle-left'}});$('.datetimepicker').on('dp.show',function(){$(this).closest('.table-responsive').removeClass('table-responsive').addClass('temp');}).on('dp.hide',function(){$(this).closest('.temp').addClass('table-responsive').removeClass('temp')});}
        });
    </script>
    @endsection
@endsection

