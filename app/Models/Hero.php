<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'title',
        'subtitle',
        'button_text',
        'button_url',
        'video_button_text',
        'video_button_url',
        'banner_item_title',
        'banner_item_subtitle',
        'round_text',
        'image',
    ];
}
