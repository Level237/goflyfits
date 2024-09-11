<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Measure extends Model
{
    use HasFactory;

    public function measurable():MorphTo{
        return $this->morphTo();
    }
}
