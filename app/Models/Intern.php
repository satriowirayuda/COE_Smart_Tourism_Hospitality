<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Intern extends Model
{
    use HasFactory;
    protected $guarded = ["id"];
    /**
     * Get all of the majors for the Intern
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function majors(): HasMany
    {
        return $this->hasMany(InternMajor::class, 'intern_id', 'id');
    }

    /**
     * Get all of the projects for the Intern
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projects(): HasMany
    {
        return $this->hasMany(InternProject::class, 'intern_id', 'id');
    }
}
