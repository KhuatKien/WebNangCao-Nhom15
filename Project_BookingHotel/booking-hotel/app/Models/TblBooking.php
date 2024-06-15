<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblBooking extends Model
{
    protected $table = 'tblbooking';
    protected $primaryKey = 'BookingID';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'BookingID', 'GuestID', 'RoomNo', 'BookingDate', 'BookingTime', 'ArrivalDate', 'DepartureDate', 'EstArrivalTime', 'EstDepartureTime', 'NumAdults', 'NumChildren', 'Status'
    ];

    // public function room()
    // {
    //     return $this->belongsTo(TblRoom::class, 'RoomNo', 'RoomNo');
    // }

    public function guest()
    {
        return $this->belongsTo(TblGuest::class, 'GuestID','GuestID');
    }

    public function bill()
    {
        return $this->hasOne(TblBill::class, 'BookingID', 'BookingID');
    }
}
