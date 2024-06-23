<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiLainnya extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis_kelamin',
        'pengalaman',
        'posisi',
        'jenjang_pendidikan',
    ];

    public function jobProvider()
    {
        return $this->belongsTo(JobProvider::class);
    }
}
