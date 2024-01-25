<?php

namespace App\Models;
use App\Models\Team;
use App\Models\admin\Course;
use App\Models\admin\Feedback;
use App\Models\Profile;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Orders;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone_number', 'role',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


//    ------------------ course creation ------------------

    public function course_creation()
    {
        return $this->hasMany(Course::class);
    }

//    ------------------ course creation ------------------

//    ------------------ Feedbacks ------------------

    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }


//    ------------------ Feedbacks ------------------

//    ------------------ Feedbacks ------------------

public function team()
{
    return $this->hasMany(Team::class);
}


//    ------------------ Feedbacks ------------------

//    ------------------ Footer ------------------

public function footer()
{
    return $this->hasMany(Footer::class);
}


//    ------------------ Footer ------------------




//-----------------------------course show--------------

    public function orders()
    {
        return $this->hasMany(Orders::class,'email','email');
    }


    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    public function course_dashboard()
    {
        return $this->hasMany(Course::class);

    }





}



