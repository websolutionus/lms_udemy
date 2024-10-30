<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use HasFactory;

    protected $fillable = [
        'counter_one',
        'title_one',
        'counter_two',
        'title_two',
        'counter_three',
        'title_three',
        'counter_four',
        'title_four',
    ];
}
