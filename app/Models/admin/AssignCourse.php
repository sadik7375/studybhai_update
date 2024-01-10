<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;
use App\Models\admin\Course;
class AssignCourse extends Model
{
    protected $table = 'assigncourses'; 

    protected $fillable = [
        'course_id',
        'trainer_id',
        
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }


    public function trainer()
    {
        return $this->belongsTo(Team::class, 'trainer_id', 'id');
    }





}
