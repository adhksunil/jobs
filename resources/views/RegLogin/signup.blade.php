@extends('layouts.app')
@section('content')
    <main>

        <div class="register-form-area section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10">
                        <div class="register-form text-center">
                           

                                <div class="register-heading">
                                    <span>Sign Up</span>
                                    <p>Create your account to get full access</p>
                                </div>

                                <div class="input-box">
                                    <div class="single-input-fields">
                                        <label>Full name</label>
                                        <input type="text" placeholder="Enter full name" name="name">
                                    </div>
                                    <div class="single-input-fields">
                                        <label>Email Address</label>
                                        <input type="email" placeholder="Enter email address" name="email">
                                    </div>
                                    <div class="single-input-fields">
                                        <label>Password</label>
                                        <input type="password" placeholder="Enter Password" name="password">
                                    </div>
                                    <div class="single-input-fields">
                                        <label>Confirm Password</label>
                                        <input type="password" placeholder="Confirm Password" name="password">
                                    </div>
                                </div>

                                <div class="register-footer">
                                    <p> Already have an account? <a href="{{ url('/login') }}"> Login</a> here</p>
                                    <button class="btn login-btn">Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
