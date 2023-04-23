@extends('layouts.main')
@section('title', 'Admin dashboard')

@section('content')
    <div class="mt-5">
        <p class="text-2xl font-bold text-gray-700 dark:text-white">Dashboard</p>
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
            Welcome <strong>{{ auth()->user()->name }}</strong> to your dashboard.
        </p>
    </div>
@endsection
