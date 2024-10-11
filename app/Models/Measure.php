<?php

namespace App\Models;

use App\Models\User;
use App\Models\Clothing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Measure extends Model
{
    use HasFactory;

    public function user():HasOne{

        return $this->hasOne(User::class);
    }

    public function clothings():HasMany{

        return $this->hasMany(Clothing::class);
    }
}
