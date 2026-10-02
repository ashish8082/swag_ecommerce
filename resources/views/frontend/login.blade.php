@extends('frontend.layouts.main')
@section('customcss')
    <link rel="stylesheet" type="text/css" href="{{url('/frontend')}}/styles/categories_styles.css">
    <link rel="stylesheet" type="text/css" href="{{url('/frontend')}}/styles/login.css">
@endsection

@section('content')
    <section class="login-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7 col-sm-10">

                    <div class="login-box">

                        <!-- Logo / Heading -->
                        <div class="login-header text-center">
                            <h2>Welcome Back</h2>
                            <p>Login to your account to continue</p>
                        </div>

                        <!-- Login Form -->
                        <form action="{{ url('login') }}" method="POST">
                            @csrf

                            <!-- Email -->
                            <div class="login-form-group">
                                <label for="email">Email Address</label>

                                <div class="login-input">
                                    <i class="fa fa-envelope-o"></i>
                                    <input type="email"
                                        id="email"
                                        name="email"
                                        class="form-control"
                                        placeholder="Enter your email"
                                        value="{{ old('email') }}"
                                        required>
                                </div>

                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="login-form-group">
                                <div class="d-flex justify-content-between align-items-center">
                                    <label for="password">Password</label>

                                    <a href="{{ url('password.request') }}"
                                    class="forgot-password">
                                        Forgot Password?
                                    </a>
                                </div>

                                <div class="login-input">
                                    <i class="fa fa-lock"></i>

                                    <input type="password"
                                        id="password"
                                        name="password"
                                        class="form-control"
                                        placeholder="Enter your password"
                                        required>

                                    <span class="password-toggle"
                                        onclick="togglePassword()">
                                        <i class="fa fa-eye"></i>
                                    </span>
                                </div>

                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Remember -->
                            <div class="login-options">
                                <label class="remember-me">
                                    <input type="checkbox" name="remember">
                                    <span>Remember me</span>
                                </label>
                            </div>

                            <!-- Login Button -->
                            <button type="submit" class="login-btn">
                                LOGIN
                                <i class="fa fa-arrow-right"></i>
                            </button>

                        </form>

                        <!-- Divider -->
                        <div class="login-divider">
                            <span>OR</span>
                        </div>

                        <!-- Register -->
                        <div class="register-text text-center">
                            <span>Don't have an account?</span>
                            <a href="{{ url('register') }}">Create Account</a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
@section('customjs')
<script>
function togglePassword() {

    var password = document.getElementById('password');
    var icon = document.querySelector('.password-toggle i');

    if (password.type === 'password') {
        password.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        password.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
}
</script>
@endsection