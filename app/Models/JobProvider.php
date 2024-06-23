<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobProvider extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_title', 'job_description', 'email', 'company_name', 'job_type', 'required_skills', 'berkas'
    ];

    public function informasilainnya()
    {
        return $this->hasOne(InformasiLainnya::class);
    }

    public function locations()
    {
        return $this->hasMany(Location::class);
    }
    
}
