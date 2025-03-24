@extends('layout.layout')

@section('content')
    <div class="w-full bg-pink-300 text-gray flex justify-between items-center px-10 py-15">
        <h1 class="text-3xl uppercase font-extralight">Welcome, {{ auth()->user()->name }}</h1>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded">
                Logout
            </button>
        </form>
    </div>
    <div class="w-full h-full flex items-center justify-center gap-10 px-10">
        <div class="w-1/2 h-100 bg-pink-300 flex justify-center items-center rounded-10 shadow-lg">
        </div>

        <div class="w-1/2 h-100 bg-pink-300 flex justify-center items-center rounded-10 shadow-lg">
        </div>
    </div>
@endsection
