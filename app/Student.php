<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'gender',
        'dob',
        'citizenship',
        'blood_group',
        'perm_address',
        'temp_address',
        'is_active',
        'is_almuni'
    ];
}
