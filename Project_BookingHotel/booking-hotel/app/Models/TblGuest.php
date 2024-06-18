<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblGuest extends Model
{
    protected $table = 'tblguest';
    protected $primaryKey = 'GuestID';
    public $timestamps = false;
    // public $incrementing = true;
    // protected $keyType = 'int';

    protected $fillable = [
        'GuestID', 'DOB', 'Gender', 'PhoneNo', 'PassportNo', 'Address', 'Postcode', 'City', 'Country'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'GuestID', 'id');
    }
}