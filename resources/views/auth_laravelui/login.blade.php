@extends('layouts.auth')

@section('title')
    Login
@endsection

@section('content')
    <div class="fxt-content">
        <h2>Login into your account</h2>
        <div class="fxt-form">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" placeholder="Email" required="required" value="{{ old('email') }}"
                            autocomplete="email">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="fxt-transformY-50 fxt-transition-delay-2">
                        <input id="password" type="password" class="form-control @error('email') is-invalid @enderror"
                            name="password" placeholder="********" required="required">
                        <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                    </div>
                </div>
                <div class="form-group">
                    <div class="fxt-transformY-50 fxt-transition-delay-3">
                        <div class="fxt-checkbox-area">
                            <div class="checkbox">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">Keep me logged in</label>
                            </div>
                            <a href="{{ route('password.request') }}" class="switcher-text">Forgot Password</a>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="fxt-transformY-50 fxt-transition-delay-4">
                        <button type="submit" class="fxt-btn-fill">Log in</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="fxt-footer">
            <div class="fxt-transformY-50 fxt-transition-delay-9">
                <p>Don't have an account?<a href="{{ route('register') }}" class="switcher-text2 inline-text">Register</a>
                </p>
            </div>
        </div>
    </div>
@endsection
