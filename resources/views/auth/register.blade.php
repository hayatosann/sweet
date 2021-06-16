@extends('layouts.header')

@section('content')
<body class="allbackground">
<h2 class="welcome">ユーザー登録ページへようこそ！</h2>
<div class="register-container">
    <div class="register-box justify-content-center register-all">
        <div class="registerbody">
            <div class="card ">
             
                    <div class="card-header register-name">{{ __('初めて登録される方') }}</div>
                
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="register-username">
                            <label for="name" class="name-label">{{ __('ユーザー名') }}</label>

                            <div class="register-form">
                                <input id="name" type="text" class="name-form form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="register-email">
                            <label for="email" class="email-label">{{ __('メールアドレス') }}</label>

                            <div class="register-form">
                                <input id="email" type="email" class="email-form form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="register-pass">
                            <label for="password" class="pass-label">{{ __('パスワード') }}</label>

                            <div class="register-form">
                                <input id="password" type="password" class="pass-form form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="register-passcheck">
                            <label for="password-confirm" class="check-label">{{ __('パスワード確認') }}</label>

                            <div class="register-form">
                                <input id="password-confirm" type="password" class="check-form form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="">
                                <button type="button" onclick="history.back()" class="register-button">戻る</button>
                                <button type="submit" class="register-button">
                                    {{ __('登録') }}
                                </button>
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
