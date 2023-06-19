<x-layouts.admin>
    <x-slot name="title">Users</x-slot>

    <x-layouts.section name="head">
        <style>
            /*form { display: contents; }*/
            /*svg.pointer-events-none { display: none; }*/
        </style>
    </x-layouts.section>

    <x-layouts.section name="body">
        <div class="py-12 w-full">
            <div class="max-w-7xl mx-auto sm:px-6 lg-px-8">
                <div class="overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <livewire:user-table/>
                    </div>
                </div>
            </div>
        </div>
    </x-layouts.section>
</x-layouts.admin>
