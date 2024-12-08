@extends('templateAuth')
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
                <form class="user">
                    <div class="form-group">
                        <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                            aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                            placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                            placeholder="Confirmation Password">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input" id="customCheck">
                            <label class="custom-control-label" for="customCheck">Remember
                                Me</label>
                        </div>
                    </div>
                    <a href="/dashboard" class="btn btn-success btn-user btn-block">
                        Register
                    </a>
                </form>
                <hr>
                <div class="text-center">
                    <a class="small" href="/login">I Have Account!</a>
                </div>
            </div>
        </div>
    </div>
@endsection
