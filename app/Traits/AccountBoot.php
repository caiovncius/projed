<?php

namespace App\Traits;

use App\Account;
use App\Helpers\PublicId;

trait AccountBoot
{
    public static function booted()
    {
        static::creating(function (Account $account) {
            $account->public_id = PublicId::getUnique($account);
            return $account;
        });
    }
}
