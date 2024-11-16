<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Withdraw extends Model
{
    use HasFactory;


    function instructor() : BelongsTo
    {
        return $this->belongsTo(User::class, 'instructor_id', 'id');     
    }
}
