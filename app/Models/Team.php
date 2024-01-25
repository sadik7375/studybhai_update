<?php

namespace App\Models;

use App\Models\admin\Course;
use App\Models\admin\AssignCourse;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function courses()
    {
        return $this->belongsToMany(Course::class, 'assigncourses', 'trainer_id', 'course_id');
    }



public function assignedCourses()
{
    return $this->belongsToMany(Course::class, 'assigncourses', 'trainer_id', 'course_id');
}


}
