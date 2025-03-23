@extends('layout.layout')

@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-md max-w-md w-full">
            <div class="flex items-center justify-center mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-green-500" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <h1 class="text-2xl font-semibold text-gray-800 text-center mb-4">Verification Email Sent</h1>
            <p class="text-gray-600 text-center">A verification email has been sent to:</p>
            <p class="text-sky-300 font-medium text-center break-words">
                {{ $user->email }}
            </p>
            <p class="text-gray-600 text-center mt-4">Please check your inbox and follow the instructions to verify your
                account.</p>
        </div>
        <div><a class="bg-sky-100 px-10 py-2 rounded text-gray shadow-lg text-lg uppercase hover:bg-sky-200 cursor-pointer"
                href="{{ url(route('login')) }}">Log
                in</a></div>
    </div>
@endsection
