<?php

namespace App\Models;

use App\Models\Town;
use App\Models\Measure;
use App\Models\Payment;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        'gender',
        "measure_id",
        'town_id',
        'brand_id',
        'slug',
        'clothing_profile'
    ];

    public function categories():BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function town():BelongsTo{

        return $this->belongsTo(Town::class);
    }

    public function brand(){

        return $this->belongsTo(Brand::class);
    }

    public function measure(){
        return $this->belongsTo(Measure::class);
    }

    public function payment(){
        return $this->hasMany(Payment::class);
    }
}
