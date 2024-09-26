<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CourseChapter extends Model
{
    use HasFactory;

    function lessons(): HasMany
    {
        return $this->hasMany(CourseChapterLession::class, 'chapter_id', 'id')->orderBy('order');
    }
}
