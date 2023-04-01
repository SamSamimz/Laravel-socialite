@extends('layouts.app')

@section('content')
    <h1 class="text-orange-500 text-3xl text-center py-5">Welcome to Laravel Socialite...</h1>

    <div class="flex items-center justify-center">
        <div class="mb-3">
            <a href="/auth/github/redirect" class="bg-slate-500 text-white rounded-sm px-4 py-2 block mb-3">Request with Github</a>
            <a href="/auth/google/redirect" class="bg-green-500 text-white rounded-sm px-4 py-2 block mb-3">Request with Google</a>
            <a href="/auth/facebook/redirect" class="bg-blue-500 text-white rounded-sm px-4 py-2 block mb-3">Request with Facebook</a>
            <a href="/auth/instagram/redirect" class="bg-red-500 text-white rounded-sm px-4 py-2 block mb-3">Request with Instagram</a>
        </div>
    </div>
@endsection



