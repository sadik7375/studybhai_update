<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignCourse extends Model
{
    protected $table = 'assigncourses'; 

    protected $fillable = [
        'course_id',
        'trainer_id',
        
    ];


}
