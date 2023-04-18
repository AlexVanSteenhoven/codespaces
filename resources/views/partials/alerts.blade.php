@if(session('info') || session('warning') || session('error') || session('success') || session('message'))
<div class="absolute top-20 right-2 min-w-[350px] max-w-[350px]">
    @if(session('info'))
        <x-alert :message="session('info')" type="info" />
    @endif

    @if(session('warning'))
        <x-alert :message="session('warning')" type="warning" />
    @endif

    @if(session('error'))
        <x-alert :message="session('error')" type="error" />
    @endif

    @if(session('success'))
        <x-alert :message="session('success')" type="success" />
    @endif

    @if(session('message'))
        <x-alert :message="session('message')" type="" />
    @endif
</div>
@endif
