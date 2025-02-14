@extends('layouts.app')

@section('title', 'Protected Test Route')

@section('content')

    @if(session('account_created_success_message'))
        <div class="mt-2 text-green-600 text-sm/6 bg-green-200 rounded-md pl-2">{{ session('account_created_success_message') }}</div>
    @endif

    @if(session('login_success_message'))
        <div class="mt-2 text-green-600 text-sm/6 bg-green-200 rounded-md pl-2">{{ session('login_success_message') }}</div>
    @endif
    <div>
        I am a protected view that you can only see if you are logged in.
    </div>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endsection