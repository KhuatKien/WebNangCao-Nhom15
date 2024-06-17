<?php

// app/Models/TblRoom.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblRoom extends Model
{
    use HasFactory;

    protected $table = 'tblroom';
    protected $primaryKey = 'RoomNo';
    public $timestamps = false;

    protected $fillable = [
        'RoomNo', 'RoomType'
    ];

    public function roomType()
    {
        return $this->belongsTo(TblRoomType::class, 'RoomType', 'RoomType');
    }
}