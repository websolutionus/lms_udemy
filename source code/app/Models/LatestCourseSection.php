<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatestCourseSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_one',
        'category_two',
        'category_three',
        'category_four',
        'category_five',
    ];
}
