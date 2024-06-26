<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserResume extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'resume_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function job_applications(){
        return $this->hasMany(JobApplication::class);
    }
}
