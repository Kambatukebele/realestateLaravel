@extends('layouts.main')
@section('page-title', 'Login - Kamba Realty')
@section('content')
<div class="auth-page auth-page--login">
    <form method="POST" action="{{ route('login') }}" class="auth-page__form">
        @csrf
        <h3 class="auth-page__title">Login</h3>
        <div class="auth-page__form-group">
            <label for="email" class="auth-page__form-label">Email</label>
            <input type="email" name="email" class="auth-page__form-input" value="{{ old('email') }}">
            @error('email')
            <div class="error-sub-text">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="auth-page__form-group">
            <label for="password" class="auth-page__form-label">Password</label>
            <input type="password" name="password" required autocomplete="current-password"
                class="auth-page__form-input">
            @error('password')
            <div class="error-sub-text">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="auth-page__form-group">
            <label for="password" class="auth-page__form-label"> <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                    name="remember">Remember Me
            </label>
        </div>
        <div class="auth-page__form-group">
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">
                Forgot your password?
            </a>
            @endif
        </div>
        <div class="auth-page__form-group">
            <button type="submit" class="auth-page__form-button">Login</button>
        </div>
    </form>
</div>
@endsection



{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
@csrf

<!-- Email Address -->
<div>
    <x-input-label for="email" :value="__('Email')" />
    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
        autofocus autocomplete="username" />
    <x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>

<!-- Password -->
<div class="mt-4">
    <x-input-label for="password" :value="__('Password')" />

    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
        autocomplete="current-password" />

    <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>

<!-- Remember Me -->
<div class="block mt-4">
    <label for="remember_me" class="inline-flex items-center">
        <input id="remember_me" type="checkbox"
            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
    </label>
</div>

<div class="flex items-center justify-end mt-4">
    @if (Route::has('password.request'))
    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        href="{{ route('password.request') }}">
        {{ __('Forgot your password?') }}
    </a>
    @endif

    <x-primary-button class="ml-3">
        {{ __('Log in') }}
    </x-primary-button>
</div>
</form>
</x-guest-layout> --}}