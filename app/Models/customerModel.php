<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customerModel extends Model
{
    use HasFactory;
    protected $table = 'customer';
    public $timestamps = false;

    //Column names 

    protected $fillable = ["C_id","C_First_Name","C_Last_Name","address","CNIC"];
    
    
}
