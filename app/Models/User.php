<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Role;
use App\Models\Measure;
use App\Models\Town;
use App\Models\Category;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'full_name',
        'birthday',
        'phone_number',
        'town_id',
        'country',
        'size',
        'weight',
        'phone_number',
        'gender_user',
        'isChoice',
        'role_id',
        'measure_id',
        'color'
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function role():HasOne{
        return $this->hasOne(Role::class);
    }

    public function measure():HasOne{
        return $this->hasOne(Measure::class);
    }
    public function town():HasOne{
        return $this->hasOne(Town::class);
    }

    public function preferences(){
        return $this->belongsToMany(Category::class);
    }
}
