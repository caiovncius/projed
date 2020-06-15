<?php

namespace App;

use App\Traits\AccountBoot;
use App\Traits\AccountRelations;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Account
 * @package App
 *
 * @property int $id
 * @property string $name
 */
class Account extends Model
{

    use AccountRelations, AccountBoot;

    public $fillable = [
        'name'
    ];
}
