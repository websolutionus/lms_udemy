<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_one',
        'image_two',
        'image_three',
        'title_one',
        'title_two',
        'title_three',
        'subtitle_one',
        'subtitle_two',
        'subtitle_three',
    ];
}
