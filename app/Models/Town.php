<?php

namespace App\Models;

use App\Models\Clothing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
}
