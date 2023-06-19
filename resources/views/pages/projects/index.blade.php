<x-layouts.app>
    <x-slot name="title">Projects</x-slot>

    <x-layouts.section name="body">
        {{-- Body Content --}}
        <div class="p-4 mt-8">
            <livewire:projects-table />
        </div>
    </x-layouts.section>
</x-layouts.app>
