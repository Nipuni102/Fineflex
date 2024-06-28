<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policestation extends Model
{
    protected $table = 'police_stations';
    protected $primaryKey = 'id';
    protected $fillable = ['police_division', 'police_station','court'];
    use HasFactory;
}
