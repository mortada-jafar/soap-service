<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $fillable = [
        'national_code',
        'student_no',
        'name',
        'university',
        'grade',
    ];



}
