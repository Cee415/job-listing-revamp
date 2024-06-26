<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_listing_id',
        'user_id',
        'resume_id',
        'first_name',
        'last_name',
        'tel',
        'education'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function user_resume()
    {
        return $this->belongsTo(UserResume::class);
    }

    public function job_listing()
    {
        return $this->belongsTo(JobListing::class);
    }
}
