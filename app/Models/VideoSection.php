<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoSection extends Model
{
    use HasFactory;

    protected $fillable = ['background', 'video_url', 'description', 'button_text', 'button_url'];
}
