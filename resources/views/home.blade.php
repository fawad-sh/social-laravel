@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white  p-6 rounded-lg text-center">
            <h1 class="text-4xl mb-4">Welcome to Social Wall </h1>
            <p class="text-blue-500 text-2xl">Total messages 🖊️ : {{ $total_messages }}</p>
            <p class="text-blue-500 text-2xl">Total users 😎 : {{ $total_users }}</p>
        </div>
    </div>
@endsection