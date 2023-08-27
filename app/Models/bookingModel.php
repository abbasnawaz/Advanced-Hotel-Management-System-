<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookingModel extends Model
{
    use HasFactory;
    protected $table = 'booking';
    public $timestamps = false;

    //Column names 

    protected $fillable = ["booking_id", "entry_date", "exit_date", "B_status" , "C_id" , "M_id"];

}
