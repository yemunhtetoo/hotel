<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Booking;
use DB;
use Brian2694\Toastr\Facades\Toastr;

class BookingController extends Controller
{
    //all booking
    public function allbooking(){
        $allBookings = DB::table('bookings')->get();
        return view('formbooking.allbooking')->with(compact('allBookings'));
    }

    //booking add
    public function bookingAdd(){
        return view('formbooking.bookingadd');
    }

    //booking edit
    public function bookingEdit(){
        return view('formbooking.bookingedit');
    }

    //booking save record
    public function saveRecord(Request $request){
        // if($request->isMethod('post')){
        //     $data = $request->all();
        //     echo "<pre>"; print_r($data); die;
        // }

        $request->validate([
            'name' => 'required|string|max:255',
            'room_type' => 'required|string|max:255',
            'total_numbers' => 'required|string|max:255',
            'date' => 'required|string|max:255',
            'time' => 'required|string|max:255',
            'arrival_date' => 'required|string|max:255',
            'departure_date' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'fileupload' => 'required|file',
            'message' => 'required|string|max:255',
        ]);

        DB::beginTransaction();
        try {
            $photo = $request->fileupload;
            $file_name = rand() . '.'.$photo->getClientOriginalName();
            $photo->move(public_path('/assets/upload/'),$file_name);
                
            $booking = new Booking;
            $booking->name = $request->name;
            $booking->room_type = $request->room_type;
            $booking->total_numbers = $request->total_numbers;
            $booking->date = $request->date;
            $booking->time = $request->time;
            $booking->arrival_date = $request->arrival_date;
            $booking->departure_date = $request->departure_date;
            $booking->email = $request->email;
            $booking->ph_number = $request->phone_number;
            $booking->fileupload = $file_name;
            $booking->message = $request->message;
            $booking->save();

            DB::commit();
            Toastr::success('Booking Added successfully :)','Success');
            return redirect()->back();
        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('fail, Add Booking Failed :)','Error');
            return redirect()->back();
        }
    }

}
