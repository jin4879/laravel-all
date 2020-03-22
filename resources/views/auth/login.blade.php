@extends('layouts.empty')

@push('styles')
    <link rel="stylesheet" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth/auth.css') }}">
@endpush

@section('content')
    <main class="main">
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{asset('images/signin-image.jpg')}}" alt="sing up image"></figure>
                        <a href="{{route('joinForm')}}" class="signup-image-link">Create an account</a>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form method="POST" class="register-form" id="login-form">
                            @csrf
                            <div class="form-group">
                                <div class="position-relative">
                                    <label for="email"><i class="zmdi zmdi-email"></i></label>
                                    <input type="email" name="email" id="email" placeholder="Your Email"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="position-relative">
                                    <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="password" id="password" placeholder="Password"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="position-relative">
                                    <input type="checkbox" name="remember_me" id="remember-me" class="agree-term"/>
                                    <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                                </div>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script>
        $(function () {
            $('#login-form').on('submit', function (event) {
                event.preventDefault();
                $.post('{{route('login')}}', $(this).serialize())
                    .done(function (res) {
                        window.location = '/';
                    })
                    .fail(function (res) {
                        if (res.status === 422) {
                            $('.alert').remove();
                            $.each(res.responseJSON, function (key, val) {
                                console.log(val);
                                let input_el = $("input[name=" + key + "]");
                                input_el.parent().parent().append('<div class="alert alert-danger m-0">' + val[0] + '</div>');
                            })
                        }
                    })
                    .always(function (res) {
                    });
            });
        });
    </script>
@endpush
