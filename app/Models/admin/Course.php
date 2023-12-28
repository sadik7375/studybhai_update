<?php

namespace App\Models\admin;
use App\Models\Orders;
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

}
