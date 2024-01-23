<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'institute_name',
        'phone_number',
        'address',
        'current_status'
    ];


    public function user()
    {

        return $this->belongsTo(User::class);
    }











}


