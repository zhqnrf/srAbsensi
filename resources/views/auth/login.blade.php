@extends('layouts.auth')

@push('style')
    <link rel="stylesheet" href="{{ asset('/css/auth/login.css') }}">
@endpush

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
