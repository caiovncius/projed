<?php


namespace App\Account\Services;

use App\Account\Contracts\AccountCreatorable;
use Illuminate\Support\Facades\Hash;

class AccountCreator implements AccountCreatorable
{
    /**
     * @param string $userName
     * @param string $userEmail
     * @param string $password
     * @param string $accountName
     * @return mixed
     * @throws \Exception
     */
    public function createAccount(string $userName, string $userEmail, string $password, string $accountName)
    {
        try {
            $user = \App\User::create([
                'name' => $userName,
                'email' => $userEmail,
                'password' => Hash::make($password)
            ]);

            $account = \App\Account::create([
                'name' => $accountName
            ]);

            $user->accounts()->attach($account->id, ['is_owner' => true]);
            return $user;
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
