<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employeeModel extends Model
{
    use HasFactory;
    protected $table = 'employee';
    public $timestamps = false;

    //Column names 

    protected $fillable = ["E_id","E_Name","E_phone_no","salary","job_type","hire_date","Email"];
}
