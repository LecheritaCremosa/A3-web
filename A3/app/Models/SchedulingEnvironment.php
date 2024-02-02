<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchedulingEnvironment extends Model
{
    use HasFactory;
    protected $table = 'scheduling_environment';
    protected $fillable = ['course_id', 'document_instructor', 'date_scheduling', 'initial_hour', 'final_hour', 'environment_id'];

    public function courses()
    {
        return $this->hasMany(Course::class, 'course_id');
    }

    public function learning_environment()
    {
        return $this->belongsTo(LearningEnvironment::class);
    }
}

