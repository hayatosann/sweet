@extends('layouts.header')

@section('css')
<link href="{{ asset('css/mypage.css') }}" rel="stylesheet">
@endsection

@section('content')
    <main>
        <article class="mypage">
            <section class="mypage-title">
                <h2>私の以前口コミしたお店</h2>
            </section>

            <section class="myreview-article">
                @foreach($sendreview as $review)
                <div class="card">
                    <div class="card-1">
                        {{-- 店舗名 --}}
                        <h5 class="store-name">
                            {{$review->store->name}}
                        </h5>
                        {{-- 画像 --}}
                        <img src="{{$review->post_image}}" alt="写真">
                    </div>
                        <div class="card-2">
                            <div class="card-3">
                                {{-- レビューの星 --}}
                                <div class="star">
                                    {{$review->review}}
                                </div>
                                {{-- 予算 --}}
                                <div class="price">
                                    予算:{{$review->charge}}円
                                </div>
                                {{-- 作成日時 --}}
                                <div class="create_at">
                                    {{$review->created_at}}
                                </div>
                            </div>

                            
                                <div class="content">
                                    {{-- レビュー内容 --}}
                                    <p class="review-text">
                                        {{$review->comment}}
                                    </p>

                                    <div class="send-button">
                                        <form action="#" method="post">
                                            <input type="hidden" name="id" value="">
                                            <button type="submit" class="edit-button">編集・削除</button>
                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                @endforeach
            </section>
        </article>

        <article class="userinformation">
            <section class="userinformation-title">
                <h2>ユーザー情報</h2>
            </section>

            
            <section class="userinformation-content">
                {{-- ユーザー名 --}}
                <div class="username">
                    <h3>ユーザー名</h3>
                    <h3>{{$senduserdata->name}}</h3>
                </div>

                <div class="favorite-article">
                    <div class="favorite-title">
                        <h4>お気に入り一覧</h4>
                    </div>
                    <p>ユーザーが以前お気に入り登録をした<br>店舗一覧ページに飛びます</p>
                    <form action="#" method="post">
                        <input type="hidden" name="id" value="">
                        <button type="submit" class="favobutton">お気に入り一覧</button>
                    </form>
                </div>

                <div class="cancel-the-membership">
                    <div class="cancel-title">
                        <h4>ユーザー退会</h4>
                    </div>
                    <p>ユーザー登録を退会します。<br>退会後、あなたが過去に投稿された口コミは<br>"退会ユーザー"の投稿として、残ることになります</p>
                    <form action="#" method="post">
                        <input type="hidden" name="id" value="">
                        <button type="submit" class="deletedata-button">退会ページ</button>
                    </form>
                </div>
            </section>
            
        </article>
    </main>
</body>
</html>
@endsection