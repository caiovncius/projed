<?php

namespace App\Traits;

use App\Account;

/**
 * Trait UserRelations
 * @package App\Traits
 */
trait UserRelations
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function accounts()
    {
        return $this->belongsToMany(Account::class, 'user_accounts')->withPivot('is_owner');
    }
}
