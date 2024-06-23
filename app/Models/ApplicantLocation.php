<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantLocation extends Model
{
    use HasFactory;
    protected $fillable = [
        'kota', 'alamat_lengkap', 'pos_code'
    ];
}
