<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\InvalidStateException;

class AuthenticationController extends Controller
{
    public function index(): View
    {
        return view('pages.auth.login');
    }

    public function redirect(string $provider)
    {
        try {
            return Socialite::driver($provider)->redirect();
        } catch (InvalidStateException $exception) {
            return Socialite::driver($provider)->stateless()->redirect();
        }
    }

    public function callback(string $provider): RedirectResponse
    {
        try {
            $retrievedUser = Socialite::driver($provider)->user();
        } catch (InvalidStateException $exception) {
            $retrievedUser = Socialite::driver($provider)->stateless()->user();
        }

        $user = User::updateOrCreate([
            'provider' => $provider,
            'provider_id' => $retrievedUser->id
        ], [
            'name' => $retrievedUser->name,
            'email' => $retrievedUser->email,
            'avatar' => $retrievedUser->avatar,
            'provider_token' => $retrievedUser->token,
            'password' => Hash::make(Str::password(16))
        ]);

        Auth::login($user, true);

        return redirect('/dashboard');
    }
}
