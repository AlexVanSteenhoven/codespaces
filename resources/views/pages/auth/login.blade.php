@extends('layouts.unauthenticated')
@section('title', 'Sign-in')

@section('content')
    <div class="py-6 px-6 flex flex-row justify-center items-center min-h-screen rounded-xl">
        <div class="w-100 md:w-1/2 flex">
            <div class="w-100 md:w-1/2 hidden md:block">
                <img class="rounded-l-xl" alt="Illustration for the application" src="{{ Vite::asset('resources/images/auth_side_image.png') }}">
            </div>
            <div class="w-100 md:w-1/2 dark:bg-gray-800 bg-neutral-100 md:rounded-r-xl">
                <h1 class="mt-6 text-center text-2xl font-bold leading-none text-gray-700 dark:text-white">Welcome back to <span class="text-orange-400">Codespaces</span></h1>
                <p class="mt-2 px-6 text-center text-gray-700 dark:text-gray-300">Please login with your favorite provider or simply by email and password to continue!</p>
                <hr class="h-px mx-6 my-6 bg-gray-200 border-0 dark:bg-gray-600" />

                <section class="login-form-wrapper">
                    <div class="social-providers flex flex-col gap-4">
                        {{-- Github button --}}
                        <a href="" class="mx-6 p-2 flex flex-column justify-center w-100 text-gray-900 font-bold focus:outline-none bg-orange-400 rounded-lg hover:bg-orange-300 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-orange-400">
                            <div class="btn-content-center flex flex-row items-center">
                                <img alt="Gitlab icon" class="bg-white rounded-full p-1 dark:bg-transparent" src="{{ Vite::asset('resources/images/icons/github.svg') }}" />
                                <span class="pl-5">Sign in with Github</span>
                            </div>
                        </a>

                        {{-- Gitlab button --}}
                        <a href="" class="mx-6 p-2 flex flex-column justify-center items-center w-100 text-gray-900 font-bold focus:outline-none bg-orange-400 rounded-lg hover:bg-orange-300 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-orange-400">
                            <div class="btn-content-center flex flex-row items-center">
                                <img alt="Gitlab icon" class="bg-white rounded-full p-1 dark:bg-transparent" src="{{ Vite::asset('resources/images/icons/gitlab.svg') }}" />
                            <span class="pl-5">Sign in with Gitlab</span>
                            </div>
                        </a>
                    </div>
                    <hr class="h-px mx-6 mt-6 mb-2 bg-gray-200 border-0 dark:bg-gray-600" />
                    <form class="mx-6" method="POST" action="{{ route('auth.login.email') }}">
                        @csrf
                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@example.com" required>
                        </div>
                        <div class="mb-6">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="flex items-center justify-between mb-6">
                            <button type="submit" class="text-black bg-orange-400 hover:bg-orange-300 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-orange-400 dark:hover:bg-orange-300">Submit</button>
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" name="remember" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800">
                                <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                            </div>
                        </div>
                    </form>
                </section>

                <hr class="h-px mx-6 mt-6 mb-2 bg-gray-200 border-0 dark:bg-gray-600" />
                <a href="{{ route('auth.register') }}" class="text-gray-700 dark:text-gray-300 text-xs px-6 hover:underline mb-6">No account? Create one here!</a>
            </div>
        </div>
    </div>
@endsection
