<?php


namespace App\Traits;

use App\User;

/**
 * Trait AccountRelations
 * @package App\Traits
 */
trait AccountRelations
{
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_accounts');
    }
}
