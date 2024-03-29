<?php

namespace App\Models;

use App\Models\Traits\Multitenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use NunoMaduro\PhpInsights\Domain\Contracts\HasMax;

class Player extends Model
{
    use HasFactory, Multitenantable,SoftDeletes;

    protected $guarded = [];

    /**
     * Retrieves the associated Country model for the current instance.
     *
     * @return BelongsTo The associated Country model.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    public function performances(): HasMany
    {
        return $this->hasMany(Performance::class);
    }
}
