<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin\Course;

class Orders extends Model
{
    protected $fillable = [
        'user_id', 'amount', 'status', 'course_ID', 'transaction_id', 'currency',
    ];

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }


    public function course(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Course::class, 'course_id','id');
    }
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class,'email','email');
    }
}
