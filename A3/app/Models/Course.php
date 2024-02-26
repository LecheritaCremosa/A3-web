<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'course';
    protected $fillable = ['code','shift', 'career_id', 'initial_date', 'final_date', 'status' ];

    public function carrers()
    {
        return $this->hasMany(Career::class);
    }
    public function scheduling_environment()
    {
        return $this->belongsTo(SchedulingEnvironment::class);
    }

}






