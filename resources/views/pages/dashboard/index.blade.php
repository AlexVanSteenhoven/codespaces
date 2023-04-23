@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')
    <div class="p-4 w-full">
        <div class="grid grid-cols-1 gap-4 mb-4">
            <div class="flex items-center justify-between px-5 h-24 rounded bg-gray-50 dark:bg-gray-800">
                <div>
                    <p class="text-2xl font-bold text-gray-700 dark:text-white">Dashboard</p>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                        Welcome <strong>{{ auth()->user()->name }}</strong> to your dashboard.
                    </p>
                </div>
                <div dir="rtl">
                    <p class="text-2xl font-bold text-gray-700 dark:text-white">Current time</p>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400" id="currentTime">
                        {{ date('d-m-Y H:i:s') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-4 mb-4">
            <div class="flex items-center justify-between px-5 rounded bg-gray-50 h-28 dark:bg-gray-800">
                <div>
                    <p class="text-2xl font-bold text-gray-700 dark:text-white">Clients</p>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                        The current number of <strong>active</strong> clients.
                    </p>
                </div>
                <a href="{{ route('app.clients') }}" class="flex p-2 items-center justify-center text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i class="fas fa-building-user p-1"></i>
                    <span class="text-2xl p-1 font-bold text-gray-700 dark:text-white">{{ $clients }}</span>
                </a>
            </div>
            <div class="flex items-center justify-between px-5 rounded bg-gray-50 h-28 dark:bg-gray-800">
                <div>
                    <p class="text-2xl font-bold text-gray-700 dark:text-white">Projects</p>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                        The total amount of projects.
                    </p>
                </div>
                <a href="{{ route('app.projects') }}" class="flex p-2 items-center justify-center text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i class="fas fa-table-cells p-1"></i>
                    <span class="text-2xl p-1 font-bold text-gray-700 dark:text-white">{{ $projects }}</span>
                </a>
            </div>
            <div class="flex items-center justify-between px-5 rounded bg-gray-50 h-28 dark:bg-gray-800">
                <div>
                    <p class="text-2xl font-bold text-gray-700 dark:text-white">Open tasks</p>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                        The amount of open tasks for all users.
                    </p>
                </div>
                <a href="{{ route('app.projects') }}" class="flex p-2 items-center justify-center text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i class="fa-solid fa-list-check p-1"></i>
                    <span class="text-2xl p-1 font-bold text-gray-700 dark:text-white">{{ $projects }}</span>
                </a>
            </div>
        </div>
        <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
            <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
            <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
            <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
        </div>
    </div>
@endsection

@section('metadata')
    <script>
        setInterval(() => {
            document.querySelectorAll('#currentTime').forEach((clock) => {
                const date = new Date();
                const day = date.getDate();
                const month = ("0" + (date.getMonth() + 1)).slice(-2)
                const year = date.getFullYear();
                const hours = date.getHours();
                const minutes = date.getMinutes();
                const seconds = ("0" + date.getSeconds()).slice(-2);
                clock.innerHTML = `${day}-${month}-${year} ${hours}:${minutes}:${seconds}`;
            });
        }, 1000);
    </script>
@endsection
