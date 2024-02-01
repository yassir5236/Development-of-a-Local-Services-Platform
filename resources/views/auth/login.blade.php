<!-- resources/views/auth/login.blade.php -->

@extends('layout')

@section('title', 'Login')

@section('content')
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-xs">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email Address
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" type="email" placeholder="Your email" name="email" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" type="password" placeholder="********" name="password" required>
                </div>
                <div class="mb-6">
                    <button
                        class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Log in
                    </button>
                </div>
                <p class="text-gray-700 text-xs text-center">
                    Don't have an account? <a class="text-blue-500 hover:text-blue-700" href="{{ route('register') }}">Register</a>.
                </p>
            </form>
        </div>
    </div>
@endsection
