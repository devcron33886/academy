<?php

namespace App\Models;

use App\Models\Traits\Multitenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];

    /*public function players(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Player::class);
    }*/
}
