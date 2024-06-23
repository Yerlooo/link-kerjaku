<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [
        'negara',
        'alamat',
        'pos_code',
        'job_provider_id'
    ];

    public function jobProvider()
    {
        return $this->belongsTo(JobProvider::class);
    }
}
