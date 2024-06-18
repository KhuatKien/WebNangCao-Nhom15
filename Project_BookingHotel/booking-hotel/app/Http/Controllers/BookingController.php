<?php

// app/Http/Controllers/BookingController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblBooking;
use App\Models\TblGuest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'roomNo' => 'required|exists:tblroom,RoomNo',
            'checkin' => 'required|date_format:d/m/Y|after_or_equal:'.Carbon::now()->addDays(2)->format('d/m/Y'),
            'checkout' => 'required|date_format:d/m/Y|after:checkin',
            'adults' => 'required|integer|min:1',
            'children' => 'required|integer|min:0'
        ]);

        $checkin = Carbon::createFromFormat('d/m/Y', $request->checkin)->format('Y-m-d');
        $checkout = Carbon::createFromFormat('d/m/Y', $request->checkout)->format('Y-m-d');

        $guest = TblGuest::where('user_id', Auth::id())->first();

        $booking = new TblBooking();
        $booking->GuestID = $guest->GuestID;
        $booking->RoomNo = $request->roomNo;
        $booking->BookingDate = Carbon::now()->toDateString();
        $booking->BookingTime = Carbon::now()->toTimeString();
        $booking->ArrivalDate = $checkin;
        $booking->DepartureDate = $checkout;
        $booking->NumAdults = $request->adults;
        $booking->NumChildren = $request->children;
        $booking->Status = 0; // Assuming default status as 0

        $booking->save();

        return redirect()->back()->with('success', 'Room booked successfully.');
    }
}