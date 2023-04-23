<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800 flex justify-between flex-col">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('app.dashboard') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i class="fa-solid fa-gauge"></i>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('app.clients') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i class="fa-solid fa-building-user"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Clients</span>
                </a>
            </li>
            <li>
                <a href="{{ route('app.projects') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i class="fa-solid fa-table-cells"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Projects</span>
                </a>
            </li>
        </ul>
        @role('administrator')
        <ul class="space-y-2 font-medium">
            <li class="p-2">
                <span class="text-gray-900 dark:text-gray-300 pb-1 text-sm border-b-2 border-gray-700">Administrative Tools</span>
            </li>
            <li>
                <a href="{{ route('admin.users') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i class="fa-solid fa-users"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.roles') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i class="fa-solid fa-user-shield"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Roles</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.permissions') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i class="fa-solid fa-shield"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Permissions</span>
                </a>
            </li>
            @endrole
        </ul>
    </div>
</aside>
