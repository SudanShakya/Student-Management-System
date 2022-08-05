<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education_info extends Model
{
    protected $fillable = [
        'student_id',
        'board',
        'institution_name',
        'cpga_per',
        'passed_year'
    ];
}
