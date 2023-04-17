<?php

namespace App;

use App\Models\User;

class Helpers
{
    /**
     * Checks if the user that is trying to log in has used their correct login provider
     *
     * @param string $email
     * @param string $provider
     * @return bool
     */
    public static function userUsesCorrectAuthProvider(string $email, string $provider): bool
    {
        if ($user = User::where('email', $email)->first()) {
            if ($user->provider !== $provider) {
                return false;
            }
        }

        return true;
    }
}
