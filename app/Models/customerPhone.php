<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customerPhone extends Model
{
    use HasFactory;
    protected $table = 'customer_phone';
    public $timestamps = false;

    //Column names 

    protected $fillable = ["C_phone_no","C_id"];
}
