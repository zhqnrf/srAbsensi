@extends('layouts.auth')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endpush

<style>
    html,
    body {
        height: 100%;
    }

    body {
        display: flex;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 90px;
        /* background: linear-gradient(50deg, , #e0cc8d); */
        background: #760712;
    }

    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .form-signin {
        padding: 20px;
    }

    .form-signin .form-floating:focus-within {
        z-index: 2;
    }

    .form-signin input[type="email"] {
        margin-bottom: -1px;
    }

    .form-signin input[type="password"] {
        /* margin-bottom: 10px; */
    }

    /* Gaya default untuk layar berukuran lebih kecil dari 1200px */
    .card-login {
        width: 100%;
        background: #e0cc8d;
    }

    /* Menggunakan media query untuk mengatur lebar menjadi 400px ketika layar lebih besar dari 1200px */
    @media screen and (min-width: 1200px) {
        .card-login {
            width: 400px;
        }
    }

    .login-container {
        background-color: white;

        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        border-radius: 7px;
        animation: slide-in 0.5s ease-out;
    }

    .field-icon {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
    }

    .field-icon.eye::before {
        content: "\f06e";
    }

    .field-icon.eye-slash::before {
        content: "\f070";
    }
</style>

@section('content')
    <div class="container">
        <div class="card card-login mt-5 me-lg-5 ms-lg-5 mb-3">
            <div class="card-body">
                <main class="form-signin w-100 m-auto">
                    <form method="POST" action="{{ route('auth.login') }}" id="login-form">
                        <img class="text-center" src="{{ 'assets/logoAbsenRed.png' }}" alt=""
                            style="height: 100px; display: block; margin: 0 auto;" class="text-center">
                        <p class="h6 mb-3 fw-bold text-center" style="color: #760712">Silahkan Masuk untuk Absensi</p>
                        <div class="form-floating mb-2">
                            <input type="email" class="form-control" id="floatingInputEmail" name="email"
                                placeholder="name@example.com">
                            <label for="floatingInputEmail">Email address</label>
                        </div>

                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" name="password"
                                placeholder="Password">
                            <label for="floatingPassword">Password</label>
                            <span toggle="#floatingPassword" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>


                        <div class="form-check mb-3 mt-2">
                            <input class="form-check-input" type="checkbox" name="remember" id="flexCheckRemember">
                            <label class="form-check-label" for="flexCheckRemember">
                                Ingatkan Saya di Perangkat ini
                            </label>
                        </div>

                        <button class="w-100 btn " style="background: #760712; color: white" type="submit"
                            id="login-form-button">Masuk</button>
                        <p class="mt-5 mb-3 text-muted">&copy; ICT PPM Syafiur Rohman</p>
                    </form>
                </main>
            </div>
        </div>

    </div>
@endsection

@push('script')
    <script type="module" src="{{ asset('js/auth/login.js') }}"></script>
@endpush
