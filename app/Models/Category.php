<?php

namespace App\Models;

use App\Models\User;
use App\Models\Clothing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable=[
        'category_title'
    ];

    public function clothings():BelongsToMany{
        return $this->belongsToMany(Clothing::class);
    }

    public function users(){

        return $this->belongsToMany(User::class);
    }
}
