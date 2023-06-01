@extends('layouts.app')
@section('content')
    <main>

        <div class="login-form-area section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10">
                        <div class="login-form">

                            <div class="login-heading">
                                <span>Login</span>
                                <p>Enter Login details to get access</p>
                            </div>

                            <div class="input-box">
                                <div class="single-input-fields">
                                    <label>Username or Email Address</label>
                                    <input type="text" placeholder="Username / Email address">
                                </div>
                                <div class="single-input-fields">
                                    <label>Password</label>
                                    <input type="password" placeholder="Enter Password">
                                </div>
                                <div class="single-input-fields login-check">
                                    <input type="checkbox" id="fruit1" name="keep-log">
                                    <label for="fruit1">Keep me logged in</label>
                                    <a href="#" class="f-right">Forgot Password?</a>
                                </div>
                            </div>

                            <div class="login-footer">
                                <p>Don’t have an account? <a href="{{ url('/signup') }}">Sign Up</a> here</p>
                                <button class="btn login-btn">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
