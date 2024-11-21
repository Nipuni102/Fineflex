<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policeofficer extends Model
{
    use HasFactory;

    protected $table = 'police_officers';

    protected $fillable = [
        'police_id',
        'name',
        'mobile_number',
        'email',
        'password',
        'police_station_id'
    ];

        /**
     * Hash password before saving.
     */
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($officer) {
            if ($officer->isDirty('password')) {
                $officer->password = bcrypt($officer->password);
            }
        });
    }
}
