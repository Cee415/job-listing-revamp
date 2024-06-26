<?php

namespace App\Models;

use App\Models\JobListing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'logo_url',
        'address',
        'city',
        'state',
        'postal',
        'tel',
        'email',
        'website',
        'deleted_at',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function job_listings(){
        return $this->hasMany(JobListing::class);
    }
}
