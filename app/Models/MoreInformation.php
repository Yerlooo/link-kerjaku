<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoreInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'gaji', 'sertifikat', 'img_sertifikat', 'cv', 'img_cv', 'reason'
    ];
}
