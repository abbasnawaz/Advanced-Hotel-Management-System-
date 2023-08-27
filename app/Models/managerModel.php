<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class managerModel extends Model
{
    use HasFactory;
    protected $table = 'manager';
    public $timestamps = false;

    //Column names 

    protected $fillable = ["M_id","M_Name"];
}
