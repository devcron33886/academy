<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait Multitenantable
{
    protected static function bootMultitenantable(): void
    {
        static::creating(function ($model) {
            $user = auth()->user();
            if ($user) {
                $model->user_id = $user->id;
            }
        });

        $user = auth()->user();
        if ($user && !$user->is_admin) {
            static::addGlobalScope('created_by_user_id', function (Builder $builder) use ($user) {
                $builder->where('user_id', $user->id);
            });
        }
    }
}
