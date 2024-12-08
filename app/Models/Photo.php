<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Photo extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    /**
     * Get the shop that owns the Photo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class, 'shop_id', 'id');
    }

    /**
     * Get the innovillage that owns the Photo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function innovillage(): BelongsTo
    {
        return $this->belongsTo(Innovation::class, 'innovillage_id', 'id');
    }

    /**
     * Get the innovation that owns the Photo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function innovation(): BelongsTo
    {
        return $this->belongsTo(Innovation::class, 'innovation_id', 'id');
    }
}
