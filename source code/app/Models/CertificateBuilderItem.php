<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificateBuilderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'element_id',
        'x_position',
        'y_position'
    ];
}
