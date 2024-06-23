<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobVacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title', 'company_name', 'location', 'requirements', 'salary_range', 'posting_date', 'contact_email', 'contact_phone', 'experience_level', 
    ];
}
