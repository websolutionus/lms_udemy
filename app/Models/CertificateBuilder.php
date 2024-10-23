<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificateBuilder extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'sub_title',
        'description',
        'signature',
        'background',
    ];
}
