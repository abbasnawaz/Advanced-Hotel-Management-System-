<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class confirm_booking extends Model
{
    use HasFactory;
    protected $table = 'confirm_booking';
    public $timestamps = false;

    //Column names 

    protected $fillable = ["name", "email", "phone_no", "checkin" , "CB_ID" , "checkout", "address"];
}
