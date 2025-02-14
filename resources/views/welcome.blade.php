@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

    @if(session('logout_success_message'))
        <div class="mt-2 text-blue-600 text-sm/6 bg-blue-200 rounded-md pl-2">{{ session('logout_success_message') }}</div>
    @endif
    <div>
        Hello world
    </div>
@endsection