<!-- resources/views/auth/signup.blade.php -->
@extends('layouts.auth')

@section('content')
    <div>
        <a href="{{ route('index') }}" class="mb-2.5 max-w-[290px]">
            <img src="{{ asset('assets/images/logo.png') }}" alt="">
        </a>
        <h4 class="mb-3">Sign Up to your Account</h4>
        <p class="mb-8 text-secondary-light text-lg">Welcome back! please enter your detail</p>
    </div>

    <form action="#">
        <div class="icon-field mb-4 relative">
            <span class="absolute start-4 top-1/2 -translate-y-1/2 pointer-events-none flex text-xl">
                <iconify-icon icon="f7:person"></iconify-icon>
            </span>
            <input type="text" class="form-control h-[56px] ps-11 border-neutral-300 bg-neutral-50 dark:bg-dark-2 rounded-xl" placeholder="Username">
        </div>

        <div class="icon-field mb-4 relative">
            <span class="absolute start-4 top-1/2 -translate-y-1/2 pointer-events-none flex text-xl">
                <iconify-icon icon="mage:email"></iconify-icon>
            </span>
            <input type="email" class="form-control h-[56px] ps-11 border-neutral-300 bg-neutral-50 dark:bg-dark-2 rounded-xl" placeholder="Email">
        </div>

        <div class="mb-5">
            <div class="relative">
                <div class="icon-field">
                    <span class="absolute start-4 top-1/2 -translate-y-1/2 pointer-events-none flex text-xl">
                        <iconify-icon icon="solar:lock-password-outline"></iconify-icon>
                    </span>
                    <input type="password" class="form-control h-[56px] ps-11 border-neutral-300 bg-neutral-50 dark:bg-dark-2 rounded-xl" id="your-password" placeholder="Password">
                </div>
                <span class="toggle-password ri-eye-line cursor-pointer absolute end-0 top-1/2 -translate-y-1/2 me-4 text-secondary-light" data-toggle="#your-password"></span>
            </div>
            <span class="mt-3 text-sm text-secondary-light">Your password must have at least 8 characters</span>
        </div>

        <div class="mt-6">
            <div class="form-check style-check flex items-start gap-2">
                <input class="form-check-input border border-neutral-300 mt-1.5" type="checkbox" id="condition">
                <label class="text-sm" for="condition">
                    By creating an account you agree to the
                    <a href="#" class="text-primary-600 font-semibold">Terms & Conditions</a> and our
                    <a href="#" class="text-primary-600 font-semibold">Privacy Policy</a>
                </label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary justify-center text-sm btn-sm px-3 py-4 w-full rounded-xl mt-8">Sign Up</button>

        <div class="mt-8 center-border-horizontal text-center relative before:absolute before:w-full before:h-[1px] before:top-1/2 before:-translate-y-1/2 before:bg-neutral-300 before:start-0">
            <span class="bg-white dark:bg-dark-2 z-[2] relative px-4">Or sign up with</span>
        </div>

        <div class="mt-8 flex items-center gap-3">
            <button type="button" class="w-1/2 btn border rounded-xl flex justify-center items-center gap-3">
                <iconify-icon icon="ic:baseline-facebook" class="text-primary-600 text-xl"></iconify-icon> Facebook
            </button>
            <button type="button" class="w-1/2 btn border rounded-xl flex justify-center items-center gap-3">
                <iconify-icon icon="logos:google-icon" class="text-primary-600 text-xl"></iconify-icon> Google
            </button>
        </div>

        <div class="mt-8 text-center text-sm">
            <p>Already have an account? <a href="{{ route('signin') }}" class="text-primary-600 font-semibold hover:underline">Sign In</a></p>
        </div>
    </form>
@endsection
