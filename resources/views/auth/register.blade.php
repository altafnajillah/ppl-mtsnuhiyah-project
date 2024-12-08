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
                    <h1 class="h4 text-gray-900 mb-4">Register</h1>
                </div>
                <form method="POST" action="{{ route('register') }}" class="user">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="name"
                            aria-describedby="emailHelp" placeholder="Nama" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email"
                            aria-describedby="emailHelp" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                            placeholder="Password" name="password" required autocomplete="new-password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user"
                            placeholder="Konfirmasi Password" name="password_confirmation" required autocomplete="new-password">
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <div class="custom-control custom-checkbox small">--}}
{{--                            <input type="checkbox" class="custom-control-input" id="customCheck">--}}
{{--                            <label class="custom-control-label" for="customCheck">Remember--}}
{{--                                Me</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <button type="submit" class="btn btn-success btn-user btn-block">
                        Register
                    </button>
                </form>
                <hr>
                <div class="text-center">
                    <a class="small" href="{{ route('login') }}">Sudah punya akun?, login</a>
                </div>
            </div>
        </div>
    </div>
@endsection
