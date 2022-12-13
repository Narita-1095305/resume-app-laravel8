<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class, 'users_id');
    }

    public function works(){
        return $this->hasMany(Work::class, 'resumes_id');
    }

    public function educations(){
        return $this->hasMany(Educations::class, 'resumes_id');
    }

    public function licences(){
        return $this->hasMany(Licences::class, 'resumes_id');
    }
}
