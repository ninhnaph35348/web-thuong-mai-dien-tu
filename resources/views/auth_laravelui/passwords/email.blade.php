@extends('layouts.auth')

@section('content')
    <div class="fxt-content">
        <h2>Recover your password</h2>
        <div class="fxt-form">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required placeholder="Email" required="required"
                            autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="fxt-transformY-50 fxt-transition-delay-4">
                        <button type="submit" class="fxt-btn-fill">Send Me Email</button>
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
