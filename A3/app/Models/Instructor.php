<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    protected $table = 'instructor';
    protected $fillable = ['full_name', 'sena_email', 'personal_email', 'phone', 'password', 'type', 'profile'];

    public function scheduling_environment()
    {
        return $this->hasMany(SchedulingEnvironment::class);
    }
}


