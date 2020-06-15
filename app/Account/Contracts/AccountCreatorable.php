<?php


namespace App\Account\Contracts;


interface AccountCreatorable
{
    /**
     * @param string $userName
     * @param string $userEmail
     * @param string $password
     * @param string $accountName
     * @return mixed
     * @throws \Exception
     */
    public function createAccount(string $userName, string $userEmail, string $password, string $accountName);
}
