@extends('layouts.master_authem')
@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="background-image: url(authem/images/bg-01.jpg);">
                
                <span class="login100-form-title-1">
                    Forgot your password?
            </div>
                </span>
               
            <form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
                    @csrf
                <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="text" name="email" placeholder="Enter email">
                    <span class="focus-input100">
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                    </span>
                    <x-auth-session-status class="mb-4 text-success" :status="session('status')" />
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Email Password Reset
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection