<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Measure_men extends Model
{
    use HasFactory;

    public function measures():MorphMany
    {
        return $this->morphMany(Measure::class,"measurable");
    }
}
