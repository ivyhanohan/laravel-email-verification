@extends('layout.layout')

@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
        <div class="bg-white p-12 rounded-xl shadow-2xl max-w-md w-full text-center">
            <div class="flex items-center justify-center mb-8">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-green-600" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <h1 class="text-3xl font-bold text-gray-900 mb-6">Email Successfully Verified!</h1>
            <p class="text-gray-700 mb-8">Your email has been successfully verified. You can now log in to your account.</p>
            <a href="{{ url(route('login')) }}"
                class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-lg shadow-md transition duration-300 ease-in-out">
                Log In
            </a>
        </div>
    </div>
@endsection
