<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Violationtype extends Model
{
    protected $table = 'Violationtypes';
    protected $primaryKey = 'id';
    protected $fillable = ['violation_name', 'fine_amount'];
    use HasFactory;
}
