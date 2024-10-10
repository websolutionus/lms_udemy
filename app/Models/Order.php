<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;


    function customer() : BelongsTo
    {
        return $this->belongsTo(User::class, 'buyer_id', 'id');    
    }
}
