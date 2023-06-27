@extends('layouts.main')
@section('page-title', 'Register - Kamba Realty')
@section('content')
<div class="auth-page auth-page--login">
    <form action="{{ route('register') }}" method="POST" class="auth-page__form">
        @csrf
        <h3 class="auth-page__title">Register</h3>
        <div class="auth-page__form-group">
            <label for="email" class="auth-page__form-label">Name</label>
            <input type="text" name="name" class="auth-page__form-input" value="{{ old('name') }}" required autofocus
                autocomplete="name">
            @error('name')
            <div class="error-sub-text">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="auth-page__form-group">
            <label for="email" class="auth-page__form-label">Email</label>
            <input type="email" name="email" class="auth-page__form-input" value="{{ old('email') }}" required
                autocomplete="username">
            @error('email')
            <div class="error-sub-text">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="auth-page__form-group">
            <label for="password" class="auth-page__form-label">Password</label>
            <input type="password" name="password" class="auth-page__form-input" required autocomplete="new-password">
            @error('password')
            <div class="error-sub-text">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="auth-page__form-group">
            <label for="password" class="auth-page__form-label">Confirm Password</label>
            <input type="password" class="auth-page__form-input" name="password_confirmation" required
                autocomplete="new-password">
            @error('password')
            <div class="error-sub-text">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="auth-page__form-group">
            <a href="{{ route('login') }}">
                Already registered?
            </a>
        </div>
        <div class="auth-page__form-group">
            <button type="submit" class="auth-page__form-button">Register</button>
        </div>
    </form>
</div>
@endsection

{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
@csrf

<!-- Name -->
<div>
    <x-input-label for="name" :value="__('Name')" />
    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus
        autocomplete="name" />
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>

<!-- Email Address -->
<div class="mt-4">
    <x-input-label for="email" :value="__('Email')" />
    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
        autocomplete="username" />
    <x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>

<!-- Password -->
<div class="mt-4">
    <x-input-label for="password" :value="__('Password')" />

    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
        autocomplete="new-password" />

    <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>

<!-- Confirm Password -->
<div class="mt-4">
    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
        required autocomplete="new-password" />

    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
</div>

<div class="flex items-center justify-end mt-4">
    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        href="{{ route('login') }}">
        {{ __('Already registered?') }}
    </a>

    <x-primary-button class="ml-4">
        {{ __('Register') }}
    </x-primary-button>
</div>
</form>
</x-guest-layout> --}}