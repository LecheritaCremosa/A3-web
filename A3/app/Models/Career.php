<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\type;

class Career extends Model

{
    use HasFactory;

    protected $table = 'career';
    protected $fillable = [
        'id', 'name', 'type'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class, 'career_id');
    }
}
