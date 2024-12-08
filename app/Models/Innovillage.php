<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Innovillage extends Model
{
    use HasFactory;
    protected $guarded = ["id"];
    /**
     * Get all of the teams for the Innovillage
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teams(): HasMany
    {
        return $this->hasMany(InnovillageTeam::class, 'innovillage_id', 'id');
    }

    /**
     * Get all of the photos for the Innovillage
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos(): HasMany
    {
        return $this->hasMany(Photo::class, 'innovillage_id', 'id');
    }
    public function firstPhoto(): HasOne
    {
        return $this->hasOne(Photo::class)->oldest();
    }
}
