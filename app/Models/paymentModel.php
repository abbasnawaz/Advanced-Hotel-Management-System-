<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paymentModel extends Model
{
    use HasFactory;
    protected $table = 'payment';
    public $timestamps = false;

    //Column names 

    protected $fillable = ["P_id", "booking_id_" , "P_type" , "P_amount"];
}