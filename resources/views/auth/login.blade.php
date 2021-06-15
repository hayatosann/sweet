@extends('layouts.header')

@section('content')
<body class="allbackground">
<h2 class="welcome">ログインページへようこそ！</h2>
<div class="login-container">
    <div class="login-box justify-content-center register-all">
        <div class="loginbody">
            <div class="card ">
             
                    <div class="card-header register-name">{{ __('登録済みの方ログイン') }}</div>
                
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="login-email">
                            <label for="email" class="email-label">{{ __('メールアドレス') }}</label>

                            <div class="login-form">
                                <input id="email" type="email" class="email-form form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="login-pass">
                            <label for="password" class="pass-label">{{ __('パスワード') }}</label>

                            <div class="login-form">
                                <input id="password" type="password" class="pass-form form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="login-pass-check">
                            <div class="passcheck">
                                <div class="passform-check">
                                    <input class="passform-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="passform-check-label" for="remember">
                                        {{ __('パスワードを保存する') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="loginbutton-box">
                                <button type="submit" class="login-button">
                                    {{ __('ログイン') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="password-forget" href="{{ route('password.request') }}">
                                        {{ __('パスワードを忘れてしまった場合') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
