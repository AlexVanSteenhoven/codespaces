@extends('layouts.unauthenticated')
@section('title', 'Sign-in')

@section('content')
    <div class="py-6 px-6 flex justify-content-center h-screen">
        <div class="my-auto flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
            <div class="hidden lg:block lg:w-1/2 bg-cover">
                <img src="{{ Vite::asset('resources/images/auth_side_image.png') }}" alt="side image coding with logo" />
            </div>
            <div class="w-full p-8 lg:w-1/2">
                <h2 class="text-2xl font-semibold text-gray-700 text-center">Brand</h2>
                <p class="text-xl text-gray-600 text-center">Welcome back!</p>
                <a href="{{ route('auth.redirect', 'github') }}"
                   class="flex items-center justify-center mt-4 text-white rounded-lg shadow-md hover:bg-gray-100">
                    <div class="px-4 py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                            <path xmlns="http://www.w3.org/2000/svg" d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </div>
                    <h1 class="px-4 py-3 w-5/6 text-center text-gray-600 font-bold">Sign in with Github</h1>
                </a>
                <a href="{{ route('auth.redirect', 'gitlab') }}"
                   class="flex items-center justify-center mt-4 text-white rounded-lg shadow-md hover:bg-gray-100">
                    <div class="px-4 py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                            <g>
                                <g stroke="null" id="svg_8">
                                    <polygon stroke="null" id="svg_1" fill="#e24329" points="11.992454220176,23.970645904541016 11.992454220176,23.970645904541016 16.399611392836277,9.274901390075684 7.585293693473261,9.274901390075684 11.992454220176,23.970645904541016 "/>
                                    <polygon stroke="null" id="svg_2" fill="#fc6d26" points="11.992454220176,23.970645904541016 7.585293693473261,9.274901390075684 1.4096295888803212,9.274901390075684 11.992454220176,23.970645904541016 "/>
                                    <path stroke="null" id="svg_3" fill="#fca326" d="m1.40963,9.2749l0,0l-1.33941,4.46605a0.91203,0.98824 0 0 0 0.33165,1.10494l11.59059,9.12846l-10.58282,-14.69945z"/>
                                    <path stroke="null" id="svg_4" fill="#e24329" d="m1.40963,9.2749l6.17566,0l-2.65404,-8.8506a0.45644,0.49458 0 0 0 -0.86758,0l-2.65404,8.8506z"/>
                                    <polygon stroke="null" id="svg_5" fill="#fc6d26" points="11.992454220176,23.970645904541016 16.399611392836277,9.274901390075684 22.575275617216448,9.274901390075684 11.992454220176,23.970645904541016 "/>
                                    <path stroke="null" id="svg_6" fill="#fca326" d="m22.57528,9.2749l0,0l1.33941,4.46605a0.91203,0.98824 0 0 1 -0.33165,1.10494l-11.59059,9.12846l10.58282,-14.69945z"/>
                                    <path stroke="null" id="svg_7" fill="#e24329" d="m22.57528,9.2749l-6.17566,0l2.65404,-8.85153a0.45644,0.49458 0 0 1 0.86758,0l2.65404,8.85153z"/>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <h1 class="px-4 py-3 w-5/6 text-center text-gray-600 font-bold">Sign in with Gitlab</h1>
                </a>
                <a href="{{ route('auth.redirect', 'bitbucket') }}"
                   class="flex items-center justify-center mt-4 text-white rounded-lg shadow-md hover:bg-gray-100">
                    <div class="px-4 py-3">
                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid">
                            <defs>
                                <linearGradient id="a" x1="108.633%" x2="46.927%" y1="13.818%" y2="78.776%">
                                    <stop offset="0.18" stop-color="#0052cc"/>
                                    <stop offset="1" stop-color="#2684ff"/>
                                </linearGradient>
                            </defs>
                            <g>
                                <g stroke="null" fill="none" id="svg_1">
                                    <path stroke="null" d="m9.45746,15.831l4.99142,0l1.20478,-7.81579l-7.52341,0l1.32721,7.81579z" id="svg_2"/>
                                    <path stroke="null" d="m0.77586,0.00008a0.76596,0.8511 0 0 0 -0.76596,0.98745l3.25163,21.93372a1.04173,1.15753 0 0 0 1.01875,0.96608l15.5993,0a0.76596,0.8511 0 0 0 0.76586,-0.71496l3.25172,-22.18058a0.76596,0.8511 0 0 0 -0.76605,-0.98725l-22.35526,-0.00446zm13.69197,15.85241l-4.97891,0l-1.34813,-7.82617l7.5335,0l-1.20646,7.82617z" fill="#2684ff" id="svg_3"/>
                                    <path stroke="null" d="m22.84331,8.01531l-7.18293,0l-1.20553,7.81994l-4.97489,0l-5.87421,7.74762a1.03706,1.15234 0 0 0 0.66968,0.28059l15.59071,0a0.7654,0.85048 0 0 0 0.7654,-0.71434l2.21177,-15.13381z" fill="url(#a)" id="svg_4"/>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <h1 class="px-4 py-3 w-5/6 text-center text-gray-600 font-bold">Sign in with BitBucket</h1>
                </a>
                <div class="mt-4 flex items-center justify-between">
                    <span class="border-b w-1/5 lg:w-1/4"></span>
                    <a href="#" class="text-xs text-center text-gray-500 uppercase">or login with email</a>
                    <span class="border-b w-1/5 lg:w-1/4"></span>
                </div>
                <div class="mt-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                    <input
                        class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                        type="email" />
                </div>
                <div class="mt-4">
                    <div class="flex justify-between">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                        <a href="#" class="text-xs text-gray-500">Forget Password?</a>
                    </div>
                    <input
                        class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                        type="password" />
                </div>
                <div class="mt-8">
                    <button
                        class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Login
                    </button>
                </div>
                <div class="mt-4 flex items-center justify-between">
                    <span class="border-b w-1/5 md:w-1/4"></span>
                    <a href="#" class="text-xs text-gray-500 uppercase">or sign up</a>
                    <span class="border-b w-1/5 md:w-1/4"></span>
                </div>
            </div>
        </div>
    </div>
@endsection
