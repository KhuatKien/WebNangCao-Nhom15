<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblBooking extends Model
{
    use HasFactory;
    use HasFactory;

    protected $table = 'tblbooking';
    protected $primaryKey = 'BookingID';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'GuestID', 'RoomNo', 'BookingDate', 'BookingTime', 'ArrivalDate', 'DepartureDate', 'NumAdults', 'NumChildren', 'Status'
    ];
}