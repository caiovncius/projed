<?php

namespace App\Traits;

use App\Helpers\PublicId;
use App\User;
use Illuminate\Support\Str;

trait UserBoot
{
    public static function booted()
    {
        static::creating(function (User $user) {
            $user->public_id = PublicId::getUnique($user);
            return $user;
        });
    }
}
