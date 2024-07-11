<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Clothing extends Model
{
    use HasFactory;

    protected $fillable=[
        "title",
        'description',
        'price',
        'size',
        'source',
        'slug',
        'clothing_profile'
    ];

    public function categories():BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}
