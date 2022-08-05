<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College_info extends Model
{
    protected $fillable=[
        'TU_registration',
        'symbol_no',
        'student_id',
        'faculty_id',
        'batch_id' ,
        'semester_id'
    ];
}
