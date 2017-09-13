@extends('layout.master')

@section('title')
    Login
    @endsection

@section('content')
<!-- @if(count([$errors]) > 0)
        <div class="row">
            <div class="col-md-6">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif -->
    <div class="content-wrapper">
    <div id="login-v2" class="row no-gutters">

        <div class="intro col-12 col-md">

            <div
                    class="d-flex flex-column align-items-center align-items-md-start text-center text-md-left py-16 py-md-32 px-12">

                <div class="logo bg-red mb-8">
                    <span>A</span>
                </div>

                <div class="title text-white">
                    Welcome to the MSU-IIT Alumni!
                </div>

                <div class="description pt-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ullamcorper nisl
                    erat,
                    vel convallis elit fermentum pellentesque. Sed mollis velit facilisis facilisis
                    viverra.
                </div>

            </div>
        </div>

        <div class="form-wrapper col-12 col-md-auto d-flex justify-content-center p-4 p-md-0">

            <div class="form-content md-elevation-8 h-100 bg-white text-auto py-16 py-md-32 px-12">

                <div class="title h5">Log in to your account</div>

                <div class="description mt-2">Fill up the form below.</div>

                <form method="POST" role="form" action="{{ url('/alumnus_login') }}" class="mt-8">
                    {{ csrf_field() }}
                    <div class="form-group mb-4">
                        <input type="text" class="form-control" id="username" name="username" required="" autofocus="" />
                        <label for="username">firstname.lastname</label>
                    </div>

                    <div class="form-group mb-4">
                        <input type="password" class="form-control" id="password" name="password" required="" />
                        <label for="password">password</label>
                    </div>

                    <div
                            class="remember-forgot-password row no-gutters align-items-center justify-content-between pt-4">

                        <div class="form-check remember-me mb-4">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input"
                                       aria-label="Remember Me"/>
                                <span class="checkbox-icon"></span>
                                <span class="form-check-description">Remember Me</span>
                            </label>
                        </div>

                        <a href="#" class="forgot-password text-primary mb-4">Forgot Password?</a>

                    </div>

                    <button type="submit" class="submit-button btn btn-block btn-primary my-4 mx-auto"
                            aria-label="LOG IN">
                        LOG IN
                    </button>

                </form>

                <div class="separator">
                    <span class="text">OR</span>
                </div>

                <div
                        class="register d-flex flex-column flex-sm-row align-items-center justify-content-center mt-8 mb-6 mx-auto">
                    <span class="text mr-sm-2">Don't have an account?</span>
                    <a class="link text-primary" href="{{ url('register') }}">Request an
                        account</a>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
