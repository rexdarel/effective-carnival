@extends('layout.master')

@section('title')
    Register
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

                <form method="POST" role="form" action="{{ url('/alumnus_register') }}" class="mt-8">
                {{ csrf_field() }}

                    <div class="form-group mb-4 {{ $errors->has('firstName') ? ' has-danger' : '' }}">
                        <input type="text" class="form-control" id="firstName" name="firstName" value="{{ old('firstName') }}" required autofocus />
                        <label for="firstName">First Name</label>
                        @if ($errors->has('firstName'))
                                    <div class="form-control-feedback text-danger"><small>
                                        {{ $errors->first('firstName') }}</small>
                                    </div>
                                @endif
                    </div>

                    <div class="form-group mb-4 {{ $errors->has('lastName') ? ' has-danger' : '' }}">
                        <input type="text" class="form-control" id="lastName" name="lastName" value="{{ old('lastName') }}" required/>
                        <label for="lastName">Last Name</label>
                        @if ($errors->has('lastName'))
                                    <div class="form-control-feedback text-danger"><small>
                                        {{ $errors->first('lastName') }}</small>
                                    </div>
                                @endif
                    </div>

                    <div class="form-group mb-4 {{ $errors->has('username') ? ' has-danger' : '' }}">
                        <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" required/>
                        <label for="username">userame</label>
                        @if ($errors->has('username'))
                                    <div class="form-control-feedback text-danger"><small>
                                        {{ $errors->first('username') }}</small>
                                    </div>
                                @endif
                    </div>

                    <div class="form-group mb-4 {{ $errors->has('password') ? 'has-danger' : '' }}}">
                        <input type="password" class="form-control {{ $errors->has('password') ? 'form-control-danger' : '' }}" id="password" name="password" value="{{ old('password') }}" required/>
                        <label for="password">password</label>
                        @if ($errors->has('password'))
                                    <div class="form-control-feedback text-danger"><small>
                                        {{ $errors->first('password') }}</small>
                                    </div>
                                @endif
                    </div>

                    <div class="form-group mb-4">
                        <input type="password" class="form-control" id="password-confirmation" name="password_confirmation" required/>
                        <label for="firstName">Pasword Confirmation</label>
                        @if ($errors->has('password-confirmation'))
                                    <div class="form-control-feedback text-danger"><small>
                                        {{ $errors->first('password-confirmation') }}</small>
                                    </div>
                                @endif
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
                    <a class="link text-primary" href="register.php">Request an
                        account</a>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
