@extends('layouts.app')

@section('title', 'Flawlesshands | Sign Up')

@section('content')
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto"
            src="https://tailwindui.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Join the <span class="text-primary">flawlesshands</span> community</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="{{ route('register') }}" method="POST">
            @csrf
            <div>
                <label for="first_name" class="block text-sm/6 font-medium text-gray-900">First name</label>
                <div class="mt-2">
                    <input type="text" name="first_name" id="first_name" required
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-primary sm:text-sm/6">
                </div>
                @error('first_name')
                    <div class="mt-2 text-red-600 text-sm/6 bg-red-200 rounded-md pl-2">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="last_name" class="block text-sm/6 font-medium text-gray-900">Last name</label>
                <div class="mt-2">
                    <input type="text" name="last_name" id="last_name" required
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-primary sm:text-sm/6">
                </div>
                @error('last_name')
                    <div class="mt-2 text-red-600 text-sm/6 bg-red-200 rounded-md pl-2">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                <div class="mt-2">
                    <input type="email" name="email" id="email" autocomplete="email" required
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-primary sm:text-sm/6">
                </div>
                @error('email')
                    <div class="mt-2 text-red-600 text-sm/6 bg-red-200 rounded-md pl-2">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                </div>
                <div class="mt-2">
                    <input type="password" name="password" id="password" required
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-primary sm:text-sm/6">
                </div>
                @error('password')
                    <div class="mt-2 text-red-600 text-sm/6 bg-red-200 rounded-md pl-2">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password_confirmation" class="block text-sm/6 font-medium text-gray-900">Re-enter password</label>
                </div>
                <div class="mt-2">
                    <input type="password" name="password_confirmation" id="password_confirmation" required
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-primary sm:text-sm/6">
                </div>
                @error('password_confirmation')
                    <div class="mt-2 text-red-600 text-sm/6 bg-red-200 rounded-md pl-2">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <button type="submit"
                    class="flex w-full justify-center rounded-md bg-secondary px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Sign up</button>
            </div>
        </form>

        <p class="mt-10 text-center text-sm/6 text-gray-500">
            Already a member ?
            <a href="{{ route('login') }}" class="font-semibold text-secondary hover:text-primary">Sign in here</a>
        </p>
    </div>
</div>
@endsection