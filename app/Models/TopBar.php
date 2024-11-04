<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopBar extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'phone',
        'offer_name',
        'offer_short_description',
        'offer_button_text',
        'offer_button_url',
    ];
}
