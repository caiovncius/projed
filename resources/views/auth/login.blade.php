@extends('layouts.auth')

@section('content')
    <div class="w-1/3">
        <h1 class="mb-6 text-center">{{ __('Login') }}</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="relative">
                <input
                    type="email"
                    name="email" class="block w-full bg-white p-4 border-l border-r border-t border-b rounded-tl rounded-tr @error('email') border-red-500 @enderror"
                    placeholder="{{ __('Your email') }}"
                    value="{{ old('email') }}"
                    required
                    autocomplete="email"
                    autofocus
                />
                @error('email')
                <span class="absolute top-0 w-full text-xs text-red-500 bg-red-200 px-2 rounded-tr rounded-tl border-t border-l border-r border-red-500" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="relative">
                <input
                    type="password"
                    name="password" class="block w-full bg-white p-4 border-l border-r border-b rounded-bl rounded-br @error('password') border-t border-red-500 @enderror"
                    placeholder="{{ __('Your email') }}"
                />
                @error('password')
                <span class="absolute top-0 w-full text-xs text-red-500 bg-red-200 px-2 border-t border-l border-r border-red-500" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <input class="mt-4" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            {{ __('Remember-me') }}
            <input type="submit" class="mt-2 py-3 w-full rounded" value="{{ __('Login') }}">
        </form>
        <div class="relative mt-3">
            <a href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        </div>
    </div>
@endsection
