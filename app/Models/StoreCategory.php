<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StoreCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'store_id',
        'subcategory_id',
    ];

    public function store() : BelongsTo
    {
        return $this->belongsTo(Store::class);
    }

    public function subcategory() : BelongsTo
    {
        return $this->belongsTo(Subcategory::class);
    }
}
