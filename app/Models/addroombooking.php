<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addroombooking extends Model
{
    use HasFactory;
    protected $table = 'booking_room';
    public $timestamps = false;

    //Column names 

    protected $fillable = ["R_id", "booking_id"];

}
