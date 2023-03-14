<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthenticationController extends Controller
{
    public function githubLogin(): RedirectResponse
    {
        return Socialite::driver('github')->stateless()->redirect();
    }

    public function githubRedirect()
    {
        // TODO: Yet to be implemented
        $user = Socialite::driver('github')->stateless()->user();
        dd($user);
    }

    public function gitlabLogin(): RedirectResponse
    {
        return Socialite::driver('gitlab')->stateless()->redirect();
    }

    public function gitlabRedirect()
    {
        // TODO: Yet to be implemented
        $user = Socialite::driver('gitlab')->stateless()->user();
    }

    public function bitbucketLogin(): RedirectResponse
    {
        return Socialite::driver('bitbucket')->stateless()->redirect();
    }

    public function bitbucketRedirect()
    {
        // TODO: Yet to be implemented
        $user = Socialite::driver('bitbucket')->stateless()->user();
    }
}
