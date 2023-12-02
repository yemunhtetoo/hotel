<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    //all booking
    public function allbooking(){
        return view('formbooking.allbooking');
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
            'total_members' => 'required|string|max:255',
            'date' => 'required|string|max:255',
            'time' => 'required|string|max:255',
            'arrival_date' => 'required|string|max:255',
            'departure_date' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'fileupload' => 'required|file',
            'message' => 'required|string|max:255',
        ]);
    }
}
