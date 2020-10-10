@extends('layouts/template')

{{-- @section('title', 'Login' )

@endsection --}}
@section('login')

<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>SIAK</b> SMA ADI LUHUR</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group has-feedback">
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                    placeholder="Email" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror"
                    placeholder="Password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                    </a>
                    @endif --}}
                </div>
            </div>
        </form>

    </div>
    <!-- /.login-box-body -->
</div>
@endsection