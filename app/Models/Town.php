<?php

namespace App\Models;

use App\Models\Clothing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Town extends Model
{
    use HasFactory;

    protected $fillable=[
        'town_name'
    ];

    public function clothing():HasOne
    {
        return $this->hasOne(Clothing::class);
    }
}
