<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblRoomType extends Model
{
    protected $table = 'tblroomtype';
    protected $primaryKey = 'RoomType';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'RoomPrice', 'DefaultRoomPrice', 'RoomDesc', 'Occupancy'
    ];

    public function rooms()
    {
        return $this->hasMany(TblRoom::class, 'RoomType', 'RoomType');
    }
}
