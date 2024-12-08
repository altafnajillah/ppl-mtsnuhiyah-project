@extends('login.master')
@section('isiAuth')
    <!-- Nested Row within Card Body -->
    <div class="row">
        <div class="col-lg-6 d-none d-lg-block bg-login-image">
            <img src="{{ asset('tema') }}/img/logo.png" alt=""
                 style="width: 300px; height: 400px; margin-left: 100px; margin-top: 20px;">
        </div>
        <div class="col-lg-6">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">{{ __('Login') }}</h1>
                </div>
                <form class="user" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input type="email" class="form-control form-control-user"
                               id="email"
                               aria-describedby="emailHelp" placeholder="Email" name="email"
                               value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control @error('password') is-invalid @enderror form-control-user" id="password"
                               placeholder="Password" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <div class="custom-control custom-checkbox small">--}}
{{--                            <input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>--}}
{{--                            <label class="custom-control-label" for="remember">{{ __('Ingat saya') }}</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <button class="btn btn-success btn-user btn-block" type="submit">
                        {{ __('Login') }}
                    </button>
{{--                    <a href="/" class="btn btn-success btn-user btn-block">--}}
{{--                        Login--}}
{{--                    </a>--}}
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Lupa password?') }}
                        </a>
                    @endif
                </form>
                <hr>
                <div class="text-center">
                    <a class="small" href="/register">Buat akun!</a>
                </div>
            </div>
        </div>
    </div>
@endsection
