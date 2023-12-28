<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'user_id', 'amount', 'status', 'course_ID', 'transaction_id', 'currency',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
