<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CouponApproval extends Model
{
    use HasFactory;


    protected $fillable = [
        'coupon_id',
        'country_id',
    ];

    public function coupon() : BelongsTo
    {
        return $this->belongsTo(Coupon::class);
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}
