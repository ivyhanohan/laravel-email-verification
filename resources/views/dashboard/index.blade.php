@extends('layout.layout')

@section('content')
    <div class="w-full bg-sky-100 text-gray flex justify-between items-center px-10 py-15">
        <h1 class="text-3xl uppercase font-extralight">Welcome, {{ auth()->user()->name }}</h1>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
                Logout
            </button>
        </form>
    </div>
    <div class="w-full h-full flex items-center justify-center gap-20 px-10">
        <div class="w-full h-100 bg-sky-100 flex justify-center items-center rounded-10 shadow-lg">
        </div>
    </div>
@endsection
