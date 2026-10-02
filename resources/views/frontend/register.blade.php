@extends('frontend.layouts.main')

@section('customcss')
    <link rel="stylesheet" type="text/css" href="{{url('/frontend')}}/styles/categories_styles.css">
    <link rel="stylesheet" type="text/css"href="{{ url('/frontend') }}/styles/register.css">

@endsection


@section('content')

<section class="register-page">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-7 col-md-9 col-sm-11">

                <div class="register-box">

                    <!-- Header -->
                    <div class="register-header text-center">

                        <div class="register-icon">
                            <i class="fa fa-user"></i>
                        </div>

                        <h2>Create Account</h2>

                        <p>
                            Create your account and start shopping with us
                        </p>

                    </div>


                    <!-- Form -->
                    <form action="{{ url('register') }}" method="POST">

                        @csrf


                        <div class="row">

                            <!-- First Name -->
                            <div class="col-md-6">

                                <div class="register-form-group">

                                    <label for="first_name">
                                        First Name
                                    </label>

                                    <div class="register-input">

                                        <i class="fa fa-user-o"></i>

                                        <input type="text"
                                               id="first_name"
                                               name="first_name"
                                               class="form-control"
                                               placeholder="Enter first name"
                                               value="{{ old('first_name') }}"
                                               required>

                                    </div>

                                    @error('first_name')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror

                                </div>

                            </div>


                            <!-- Last Name -->
                            <div class="col-md-6">

                                <div class="register-form-group">

                                    <label for="last_name">
                                        Last Name
                                    </label>

                                    <div class="register-input">

                                        <i class="fa fa-user-o"></i>

                                        <input type="text"
                                               id="last_name"
                                               name="last_name"
                                               class="form-control"
                                               placeholder="Enter last name"
                                               value="{{ old('last_name') }}"
                                               required>

                                    </div>

                                    @error('last_name')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror

                                </div>

                            </div>


                            <!-- Email -->
                            <div class="col-md-6">

                                <div class="register-form-group">

                                    <label for="email">
                                        Email Address
                                    </label>

                                    <div class="register-input">

                                        <i class="fa fa-envelope-o"></i>

                                        <input type="email"
                                               id="email"
                                               name="email"
                                               class="form-control"
                                               placeholder="Enter email address"
                                               value="{{ old('email') }}"
                                               required>

                                    </div>

                                    @error('email')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror

                                </div>

                            </div>


                            <!-- Phone -->
                            <div class="col-md-6">

                                <div class="register-form-group">

                                    <label for="phone">
                                        Phone Number
                                    </label>

                                    <div class="register-input">

                                        <i class="fa fa-phone"></i>

                                        <input type="text"
                                               id="phone"
                                               name="phone"
                                               class="form-control"
                                               placeholder="Enter phone number"
                                               value="{{ old('phone') }}"
                                               maxlength="10"
                                               required>

                                    </div>

                                    @error('phone')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror

                                </div>

                            </div>


                            <!-- Password -->
                            <div class="col-md-6">

                                <div class="register-form-group">

                                    <label for="password">
                                        Password
                                    </label>

                                    <div class="register-input">

                                        <i class="fa fa-lock"></i>

                                        <input type="password"
                                               id="password"
                                               name="password"
                                               class="form-control"
                                               placeholder="Create password"
                                               required>

                                        <span class="register-password-toggle"
                                              onclick="toggleRegisterPassword('password', this)">

                                            <i class="fa fa-eye"></i>

                                        </span>

                                    </div>

                                    @error('password')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror

                                </div>

                            </div>


                            <!-- Confirm Password -->
                            <div class="col-md-6">

                                <div class="register-form-group">

                                    <label for="password_confirmation">
                                        Confirm Password
                                    </label>

                                    <div class="register-input">

                                        <i class="fa fa-lock"></i>

                                        <input type="password"
                                               id="password_confirmation"
                                               name="password_confirmation"
                                               class="form-control"
                                               placeholder="Confirm password"
                                               required>

                                        <span class="register-password-toggle"
                                              onclick="toggleRegisterPassword('password_confirmation', this)">

                                            <i class="fa fa-eye"></i>

                                        </span>

                                    </div>

                                </div>

                            </div>

                        </div>


                        <!-- Terms -->
                        <div class="register-terms">

                            <label>

                                <input type="checkbox"
                                       name="terms"
                                       required>

                                <span>
                                    I agree to the
                                    <a href="#">
                                        Terms & Conditions
                                    </a>
                                    and
                                    <a href="#">
                                        Privacy Policy
                                    </a>
                                </span>

                            </label>

                        </div>


                        <!-- Register Button -->
                        <button type="submit"
                                class="register-button">

                            CREATE ACCOUNT

                            <i class="fa fa-arrow-right"></i>

                        </button>


                    </form>


                    <!-- Divider -->
                    <div class="register-divider">

                        <span>OR</span>

                    </div>


                    <!-- Login -->
                    <div class="register-login text-center">

                        <span>
                            Already have an account?
                        </span>

                        <a href="{{ url('login') }}">
                            Login
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection


@section('customjs')

<script>

function toggleRegisterPassword(inputId, element) {

    var password = document.getElementById(inputId);

    var icon = element.querySelector('i');

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