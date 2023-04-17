{{--@if(session('info') || session('warning') || session('error') || session('success'))--}}
<div class="absolute top-2 right-2 min-w-[350px] max-w-[350px]">
    <x-alert message="Hello World" type="info" />
    <x-alert message="Hello World" type="error" />
    <x-alert message="Hello World" type="warning" />
    <x-alert message="Hello World" type="success" />
    <x-alert message="Hello World" type="" />
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
</div>
{{--@endif--}}
