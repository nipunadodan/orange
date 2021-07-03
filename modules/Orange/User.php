<?php

declare(strict_types=1);

namespace Orange;

final class User
{
    private function login(string $username, string $password): bool
    {
        $user = (new Db())->select('users', '*', [
            'username' => $username,
        ]);
        if (password_verify($password, $user[0]['password'])) {
            return true;
        }
        return false;
    }

    public static function loginCheck(): bool
    {
        if (isset($_SESSION, $_SESSION['login'], $_SESSION['user_id']) && $_SESSION['login'] === 'Ok' && $_SESSION['user_id'] !== '') {
            return true;
        }else{
            return true;
        }
    }
}
