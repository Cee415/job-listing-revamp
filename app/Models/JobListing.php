<?php

namespace App\Models;

use App\Models\User;
use App\Models\Company;
use App\Models\JobCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobListing extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'user_id',
        'job_category_id',
        'mix_monthly_salary',
        'max_monthly_salary',
        'description',
        'employment_type',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function job_category(){
        return $this->hasOne(JobCategory::class);
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function job_applications(){
        return $this->hasMany(JobApplication::class);
    }

}
