<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InnovillageTeam extends Model
{
    use HasFactory;
    protected $guarded = ["id"];
    /**
     * Get the innovillage that owns the InnovillageTeam
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function innovillage(): BelongsTo
    {
        return $this->belongsTo(Innovillage::class, 'innovillage_id', 'id');
    }
}
