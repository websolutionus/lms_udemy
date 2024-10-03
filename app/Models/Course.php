<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Course extends Model
{
    use HasFactory;


    function instructor() : HasOne{
        return $this->hasOne(User::class, 'id', 'instructor_id');
    }

    function category() : HasOne
    {
        return $this->hasOne(CourseCategory::class, 'id', 'category_id');
    }
}
