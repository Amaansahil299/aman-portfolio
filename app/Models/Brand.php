<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'store_id',
        'url',
    ];

    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }
}
