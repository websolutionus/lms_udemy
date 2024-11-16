<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory;


    function course() : BelongsTo {
        return $this->belongsTo(Course::class);
    }

    function user() : BelongsTo {
        return $this->belongsTo(user::class);
    }
}
