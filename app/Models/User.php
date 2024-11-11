<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'approve_status',
        'document'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    function courses() : HasMany {
        return $this->hasMany(Course::class, 'instructor_id', 'id');
    }


    function gatewayInfo() : HasOne {
       return $this->hasOne(InstructorPayoutInformation::class, 'instructor_id', 'id'); 
    }


    function students() : HasMany {
        return $this->hasMany(Enrollment::class, 'instructor_id', 'id');
    }

    function reviews() : HasMany {
       return $this->hasMany(Review::class, 'instructor_id', 'id'); 
    }

    function enrollments() : HasMany{
       return $this->hasMany(Enrollment::class, 'user_id', 'id'); 
    }
}
