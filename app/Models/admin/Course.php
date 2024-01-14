<?php

namespace App\Models\admin;
use App\Models\Orders;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function orders()
    {
        return $this->hasMany(Orders::class, 'course_id', 'id');
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'assigncourses', 'course_id', 'trainer_id');
    }

}
