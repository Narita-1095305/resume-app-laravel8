<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

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

    public function resumes(){
        return $this->hasMany(Resume::class, 'users_id');
    }

    public function getYearsOld($year,$month,$day){
        $birthday = "{$year}";
        $birthday .= $month < 10  ? "0{$month}" : "{$month}";
        $birthday .= $day < 10  ? "0{$day}" : "{$day}";
        $now = date("Ymd");

        return floor(($now - $birthday) / 10000);
    }
}
