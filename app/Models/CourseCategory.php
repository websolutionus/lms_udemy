<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CourseCategory extends Model
{
    use HasFactory;

    function subCategories() : HasMany{
        return $this->hasMany(CourseCategory::class, 'parent_id');
    }

    function parentCategory() : BelongsTo {
        return $this->belongsTo(CourseCategory::class, 'parent_id');
    }



    function courses() : HasMany {
       return $this->hasMany(Course::class, 'category_id'); 
    }
}
