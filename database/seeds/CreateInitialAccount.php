<?php

use Illuminate\Database\Seeder;

class CreateInitialAccount extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service = app()->make(\App\Account\Contracts\AccountCreatorable::class);
        $service->createAccount('Admin Name', 'admin@projed.test', '123456', 'Account Name');
    }
}
