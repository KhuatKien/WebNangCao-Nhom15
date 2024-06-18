<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblGuest extends Model
{
    use HasFactory;
    use HasFactory;

    protected $table = 'tblguest';
    protected $primaryKey = 'GuestID';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = [
        'DOB', 'Gender', 'PhoneNo', 'PassportNo', 'Address', 'Postcode', 'City', 'Country'
    ];
}