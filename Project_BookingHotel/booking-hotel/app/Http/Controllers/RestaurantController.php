<?php

namespace App\Http\Controllers;

use App\Models\TblBookRes;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Tbltable;

class RestaurantController extends Controller
{
    public function restaurant(){
        return view('restaurant/restaurant');
    }

    public function tablelist(){
        $tables = Tbltable::all();
        return view('restaurant/tablelist', compact('tables'));
    }

    public function bookTable(Request $request)
    {
        $request->validate([
            'table_id' => 'required|string',
            'guest_id' => 'required|integer',
            'book_id' => 'required|string',
            'book_date' => 'required|date',
            'num_of_people' => 'required|integer',
        ]);

        $booking = new TblBookRes();
        $booking->BookID = $request->input('book_id');
        $booking->GuestID = $request->input('guest_id');
        $booking->TableID = $request->input('table_id');
        $booking->BookDate = $request->input('book_date');
        $booking->NumOfPeople = $request->input('num_of_people');
        $booking->StatusRes = '1'; // Status '1' for 'Pending'
        $booking->save();

        $table = TblTable::find($request->input('table_id'));
        $table->TableStatus = '1'; // Mark the table as pending
        $table->save();

        return redirect()->back()->with('success', 'Đang chờ khách sạn xác nhận');
    }
}
