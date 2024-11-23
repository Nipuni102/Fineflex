<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fine extends Model
{
    use HasFactory;
    protected $fillable = [
        'fine_id',
        'police_id',
        'driver_id',
        'vehicle_number',
        'violation_type_id',
        'police_station',
        'notification_status',
        'date',
        'time',
    ];
}
