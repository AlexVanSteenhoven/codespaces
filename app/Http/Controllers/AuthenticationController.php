<?php

namespace App\Http\Controllers;

use App\Helpers;
use App\Http\Requests\UserLoginRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\InvalidStateException;
use Illuminate\Support\Facades\Log;

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
            Log::notice($exception);
            $retrievedUser = Socialite::driver($provider)->stateless()->user();
        }

        if (Helpers::userUsesCorrectAuthProvider($retrievedUser, $provider)) {
                return redirect()->route('auth.login')
                    ->with('error', 'This email address is already associated with an another provider, please use the correct provider');

        }

        $user = User::updateOrCreate([
            'provider' => $provider,
            'provider_id' => $retrievedUser->id
        ], [
            'name' => $retrievedUser->name,
            'email' => $retrievedUser->email,
            'avatar' => $retrievedUser->avatar,
            'provider_token' => $retrievedUser->token,
            'password' => Hash::make(Str::random())
        ])->assignRole('user');

        Auth::login($user, true);

        return redirect()->route('app.dashboard')->with('success', 'successfully logged in');
    }

    public function login(UserLoginRequest $request): RedirectResponse
    {
        $credentials = $request->only(['email', 'password']);
        $rememberMe = (bool)$request->input('remember');

        if (Auth::attempt($credentials, $rememberMe)) {
            $request->session()->regenerate();

            return redirect()->route('app.dashboard')->with('success', 'successfully logged in');
        }

        if (Helpers::userUsesCorrectAuthProvider($request->input('email'), 'email')) {
            return back()
                ->with('error', 'This email address is already associated with an another provider, please use the correct provider');
        }

        return back()->with('error', 'The provided credentials does not match our records');
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();

        return redirect('/')->with('success', 'successfully logged out');
    }
}
