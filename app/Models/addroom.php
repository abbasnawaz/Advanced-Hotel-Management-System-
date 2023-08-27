<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addroom extends Model
{
    use HasFactory;
    protected $table = 'room';
    public $timestamps = false;

    //Column names 

    protected $fillable = ["R_id", "R_number", "floor" , "R_status" , "roomtype_id"];
}
