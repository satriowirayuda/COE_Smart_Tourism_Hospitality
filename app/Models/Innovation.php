<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Innovation extends Model
{
    use HasFactory;
    protected $guarded = ["id"];
    /**
     * Get all of the photos for the Innovation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos(): HasMany
    {
        return $this->hasMany(Photo::class, 'innovation_id', 'id');
    }
    /**
     * Get all of the mitra_logos for the Innovation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mitra_logos(): HasMany
    {
        return $this->hasMany(MitraLogo::class, 'innovation_id', 'id');
    }
}
