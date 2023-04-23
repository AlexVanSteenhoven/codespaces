@extends('layouts.unauthenticated')
@section('title', 'Home')

@section('content')
    @include('partials.navbar')
    <div class="container pt-20 pl-5">
        <h1 class="dark:text-white">Hello World!</h1>
    </div>
@endsection
