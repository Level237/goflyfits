<?php

namespace App\Models;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;

    protected $fillable=[
        'price',
        'user_id',
        "means_payment",
        "clothing_id"
    ];

    public function reservation():HasOne{

        return $this->hasOne(Reservation::class);
    }

    public function clothing():BelongsTo{
        return $this->belongsTo(Clothing::class);
    }
}
