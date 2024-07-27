<?php

namespace App\Models;

use App\Models\Clothing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;

    protected $fillable=[
        'brand_title'
    ];

    public function clothings():HasMany{
        return $this->hasMany(Clothing::class);
    }
}
