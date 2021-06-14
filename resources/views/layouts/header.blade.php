<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Sweets Guide</title>
</head>
<body>
    <header class="all-header">
        <div class="left-header">
            <h2 class="app-title">Sweets Guide</h2>
            <form method="get" action="#" class="search_container">
                <input type="text" size="25" placeholder="フリーワード検索">
                <input type="submit" value="&#xf002">
            </form>
        </div>
        <div class="right-header">
            @guest
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="user-register" href="{{ route('register') }}">{{ __('ユーザー新規登録') }}</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="log-in" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                </li>
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="log-out" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('ログアウト') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </div>
    </header>

    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>