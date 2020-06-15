<?php

namespace App;

use App\Traits\UserBoot;
use App\Traits\UserRelations;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class User
 * @package App
 *
 * @property int $id
 * @property string $public_id
 * @property string $name
 * @property string $email
 * @property string $password,
 * @property string $creataed_at
 * @property string $updated_at
 */
class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, UserRelations, UserBoot;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
