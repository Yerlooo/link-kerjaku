<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelfDescription extends Model
{
    use HasFactory;
    protected $fillable = [
        'deskripsi_diri', 'email', 'no_hp', 'pengalaman', 'soft_skills', 'hard_skills'
    ];
}
