<?php

require_once 'User.php';

class UserProvider
{
    private array $accounts = [
        'Luck' => '123'
    ];

    public function getByUserNameAndPassword(string $username, string $password): ?User
    {
        $expectPassword = $this->accounts[$username] ?? null;
        if ($expectPassword === $password) {
            return new User($username);
        }

        return null;
    }
}