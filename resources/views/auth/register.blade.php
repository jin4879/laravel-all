@extends('layouts.empty')

@push('styles')
    <link rel="stylesheet" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth/auth.css') }}">
@endpush

@section('content')
    <main class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            @csrf
                            <div class="form-group">
                                <div class="position-relative">
                                    <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" name="name" id="name" placeholder="Your Name"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="position-relative">
                                    <label for="email"><i class="zmdi zmdi-email"></i></label>
                                    <input type="email" name="email" id="email" placeholder="Your Email"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="position-relative">
                                    <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                    <input class="tooltipped" type="password" name="password" id="pass" placeholder="Password"
                                           data-toggle="tooltip" title="비밀번호는 영문+숫자+특수문자를 혼합하여 4자 이상 이용 가능합니다."/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="position-relative">
                                    <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                    <input type="password" name="password_confirmation" id="re_pass" placeholder="Repeat your password"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="position-relative">
                                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term"/>
                                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in
                                        <a href="#" class="term-service">Terms of service</a></label>
                                </div>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{asset('images/signup-image.jpg')}}" alt="sing up image"></figure>
                        <a href="{{route('loginForm')}}" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script>
        $(function () {
            $('#vertically-centered-alert').on('hidden.bs.modal', function (e) {
                window.location = '/';
            });

            $("[data-toggle=tooltip]").tooltip({
                placement: "top",
                trigger: "focus",
            });

            $('#register-form').on('submit', function (event) {
                event.preventDefault();
                $.post('{{route('join')}}', $(this).serialize())
                    .done(function (res) {
                        let confirm_modal = $('#vertically-centered-alert');
                        confirm_modal.find('.modal-body').text('가입이 완료되었습니다.');
                        confirm_modal.modal('show');
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


