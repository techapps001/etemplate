<!-- resources/views/auth/forgot-password.blade.php -->
@extends('layouts.auth')

@php
    $image = 'assets/images/auth/forgot-pass-img.png';
@endphp

@section('content')
    <div>
        <h4 class="mb-3">Forgot Password</h4>
        <p class="mb-8 text-secondary-light text-lg">Enter your email and we'll send a reset link.</p>
    </div>

    <form action="#">
        <div class="icon-field mb-6 relative">
            <span class="absolute start-4 top-1/2 -translate-y-1/2 pointer-events-none flex text-xl">
                <iconify-icon icon="mage:email"></iconify-icon>
            </span>
            <input type="email" class="form-control h-[56px] ps-11 border-neutral-300 bg-neutral-50 dark:bg-neutral-600 rounded-xl" placeholder="Email">
        </div>

        <button type="button" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="btn btn-primary justify-center text-sm btn-sm px-3 py-4 w-full rounded-xl">Continue</button>

        <div class="text-center mt-6">
            <a href="{{ route('signin') }}" class="text-primary-600 font-bold hover:underline">Back to Sign In</a>
        </div>
    </form>

    <div class="mt-10 text-center text-sm">
        <p>Already have an account? <a href="{{ route('signin') }}" class="text-primary-600 font-semibold hover:underline">Sign In</a></p>
    </div>
@endsection

@push('modals')
    <!-- Modal markup -->
    <div id="popup-modal" class="hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-full overflow-auto">
        <div class="relative p-10 w-full max-w-[496px] rounded-2xl bg-white dark:bg-neutral-700">
            <button type="button" class="absolute top-4 end-4" data-modal-hide="popup-modal">
                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
            <div class="text-center">
                <img src="{{ asset('assets/images/auth/envelop-icon.png') }}" alt="" class="mb-6 mx-auto">
                <h6 class="mb-3">Verify your Email</h6>
                <p class="text-secondary-light text-sm">Check your email for instructions to reset your password.</p>
                <button type="button" class="btn btn-primary w-full mt-6">Skip</button>
                <p class="mt-6 text-sm">Didn't receive an email? <a href="#" class="text-primary-600 font-semibold">Resend</a></p>
            </div>
        </div>
    </div>
@endpush
