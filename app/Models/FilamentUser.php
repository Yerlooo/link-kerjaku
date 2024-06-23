<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilamentUser extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email'];

    public function admins()
    {
        return $this->hasMany(Admin::class);
    }
}
