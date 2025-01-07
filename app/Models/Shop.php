<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Shop extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    /**
     * Get all of the photos for the Shop
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos(): HasMany
    {
        return $this->hasMany(Photo::class, 'shop_id', 'id');
    }

    public function firstPhoto(): HasOne
    {
        return $this->hasOne(Photo::class)->oldest();
    }

}
