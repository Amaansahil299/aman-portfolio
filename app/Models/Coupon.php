<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description_1',
        'description_2',
        'description_3',
        'term_1',
        'term_2',
        'term_3',
        'term_4',
        'term_5',
        'term_6',
        'specification_title',
        'rating',
        'store_id',
        'brand_id',
        'start_datetime',
        'end_datetime',
        'thumbnail',
        'is_verified',
        'verified_at',
        'offer_id',
        'discount_id',
        'restriction_id',
        'event_id',
        'url',
    ];

    public function store() : BelongsTo
    {
        return $this->belongsTo(Store::class);
    }

    public function brand() : BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function offer() : BelongsTo
    {
        return $this->belongsTo(Offer::class);
    }

    public function discount() : BelongsTo
    {
        return $this->belongsTo(Discount::class);
    }

    public function restriction() : BelongsTo
    {
        return $this->belongsTo(Restriction::class);
    }

    public function event() : BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
