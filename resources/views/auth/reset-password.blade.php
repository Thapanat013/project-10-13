@extends('layouts.master_authem')
@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="background-image: url(authem/images/bg-01.jpg);">
                <span class="login100-form-title-1">
                    Reset Password
                </span>
            </div>

            <form class="login100-form validate-form" method="POST" action="{{ route('password.store') }}">
                @csrf
             <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div class="wrap-input100 validate-input m-b-26" data-validate="email is required">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="text" name="email" placeholder="Enter Email" :value="old('email',$request->email)">
                    <span class="focus-input100">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </span>
                </div>

                <div class="wrap-input100 validate-input m-b-18" data-validate = "password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="password" placeholder="Enter password" :value="__('password')">
                    <span class="focus-input100">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </span>
                    

                </div>

                
                <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                    <span class="label-input100">Password comfirm</span>
                    <input class="input100" type="password" name="password_confirmation" placeholder="password_confirmation" :value="__('Confirm Password')">
                    <span class="focus-input100">
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </span>

                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Reset Password
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection