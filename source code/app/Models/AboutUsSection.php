<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'rounded_text',
        'lerner_count',
        'lerner_count_text',
        'title',
        'description',
        'button_text',
        'button_url',
        'video_url',
        'image',
        'lerner_image',
        'video_image',
    ];
}
