<?php

namespace App\Models;

use App\Enums\TableStatus;
use App\Enums\TableLocation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Table extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'guest_number',
        'location',
        'status',
    ];

    protected $casts = [
        'status' => TableStatus::class,
        'location' => TableLocation::class
    ];

    public function reservations(){
        return $this->hasMany(Reservation::class);
    }
}
