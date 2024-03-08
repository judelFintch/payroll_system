@extends('layouts.login')
@section('content')

<div class="account-box">
    <div class="account-wrapper">
        <h3 class="account-title">PayRollSoft/ Csberakha</h3>
        <p class="account-subtitle">Accéder à notre tableau de bord {{ __('Login') }}</p>
                      
        <form method="POST" action="{{ route('login') }}" class="needs-validation custom-form mt-4 pt-2" novalidate action="dashboard">
        @csrf
            <div class="form-group">
                <label for="useremail" class="form-label">{{ __('Email Address') }} </label>
                <input type="email" id="email" class="form-control   @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <div class="invalid-feedback">
                    Please Enter Email
                </div>
              
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="userpassword" class="form-label">Password</label>
                    </div>
                    <div class="col-auto">
                        <a class="text-muted" href="auth-recoverpw">
                            Forgot password?
                        </a>
                    </div>
                </div>
                <div class="position-relative">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <div class="invalid-feedback">
                        Please Enter Password
                    </div>
                    <span class="fa fa-eye-slash" id="toggle-password"></span>
                </div>
            </div>
            <div class="form-group text-center">
                <button class="btn btn-primary account-btn" type="submit">Login</button>
            </div>
            
        </form>

    </div>
</div>

</body>

</html>


@endsection


