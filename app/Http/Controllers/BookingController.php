<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function allbooking(){
        return view('formbooking.allbooking');
    }

    public function bookingEdit(){
        return view('formbooking.bookingedit');
    }
}
