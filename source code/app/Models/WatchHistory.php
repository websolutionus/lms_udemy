<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WatchHistory extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'course_id', 'chapter_id', 'lesson_id', 'is_completed', 'updated_at'];
}
