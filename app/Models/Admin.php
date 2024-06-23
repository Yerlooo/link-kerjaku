<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = ['filament_user_id', 'role'];

    public function filamentUser()
    {
        return $this->belongsTo(FilamentUser::class);
    }
}
