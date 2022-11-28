@extends('dashboard.layouts.login')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="main-wrapper">
    <div class="account-content">
        <div class="container">

            <div class="account-logo">
                <a href="dashboard"><img src="assets/img/logo2.png" alt="Dreamguy's Technologies"></a>
            </div>

            <div class="account-box">
                <div class="account-wrapper">
                    <h3 class="account-title">Register</h3>
                    <p class="account-subtitle">Access to our dashboard</p>

                    <form class="needs-validation custom-form mt-4 pt-2" novalidate action="dashboard">
                        <div class="form-group">
                            <label for="useremail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="useremail" placeholder="Enter email" required>
                            <div class="invalid-feedback">
                                Please Enter Email
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="userpassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter password"
                                required>
                            <div class="invalid-feedback">
                                Please Enter Password
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="userpassword" class="form-label">Repeat Password</label>
                            <input type="password" class="form-control" id="userpassword" placeholder="Enter password"
                                required>
                            <div class="invalid-feedback">
                                Please Enter Repeat Password
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" type="submit">Register</button>
                        </div>
                        <div class="account-footer">
                            <p>Already have an account? <a href="index">Login</a></p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
