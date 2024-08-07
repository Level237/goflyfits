<?php

namespace App\Models;

use App\Models\User;
use App\Models\Clothing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Town extends Model
{
    use HasFactory;

    protected $fillable=[
        'town_name'
    ];

    public function clothing():HasMany
    {
        return $this->hasMany(Clothing::class);
    }

    public function user():HasOne{
        return $this->hasOne(User::class);
    }
}
