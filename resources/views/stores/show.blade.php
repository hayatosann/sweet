@extends('layouts.header')

@section('css')
<link rel="stylesheet" href="{{ asset('css/reset.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
@endsection

@section('content')

<body>
    <section class="upper-menu">
        <a href="#" onclick="window.history.back(); return false;">
            <p class="go_back">一つ前に戻る</p>
        </a>
        <div class="shop">
            <div class="shop-data">
                <h3 class="sub-title">店舗情報</h3>
                <dl class="data_a">
                    <dt>住所</dt>
                    <dd>{{$store->address}}</dd>
                    <dt>営業時間</dt>
                    <dd>{{$store->opening_hour}}</dd>
                    <dt>定休日</dt>
                    <dd>{{$store->closing_day}}</dd>
                    <dt>電話番号</dt>
                    <dd>{{$store->phone_number}}</dd>
                    <dt>URLリンク</dt>
                    <dd><a href="{{$store->url}}" target="_blank">
                            <p>{{$store->url}}</p>
                        </a></dd>
                </dl>
            </div>
            <div class="shop-review-data">
                <h2>{{$store->name}}</h2>
                <div class="average">
                    <span class="star font">
                        <span>
                            {{$store->rating >= 1 ? '★' : '☆' }}
                        </span>
                        <span>
                            {{$store->rating  >= 2 ? '★' : '☆' }}
                        </span>
                        <span>
                            {{$store->rating  >= 3 ? '★' : '☆' }}
                        </span>
                        <span>
                            {{$store->rating  >= 4 ? '★' : '☆' }}
                        </span>
                        <span>
                            {{$store->rating  >= 5 ? '★' : '☆' }}
                        </span>
                    </span>
                    <span class="value">{{$store->rating}}</span>
                </div>
                <div class="shop-data-center">
                    <dl>
                        <dt>カテゴリー：</dt>
                        <dd>{{$store->category->name}}</dd>
                        <dt>エリア：</dt>
                        <dd>{{$store->prefecture->name}}</dd>
                        <dt>予算：</dt>
                        <dd>{{$store->price}}円</dd>
                    </dl>
                    <div class="okini">
                        <div class="word font">
                            <p>お気に入りに追加</p>
                        </div>
                        <form action="{{ route('favorites.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="store_id" value="{{ $store->id }}">
                            <button type="submit" class="btn text-danger">
                                <img src="{{ asset('css/rogo_okiniiri.jpg') }}" alt="お気に入り星" class="rogo">
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="shop-photo">
                <h3 class="sub-title">店舗写真</h3>
                <div class="shop-photos">
                    <div class="shop-detail-link">
                        @if($store->store_image == null)
                        <img class="post-img" src="{{ asset('css/noimage.png') }}" alt="NO_IMAGE">
                        @else
                        <img src="{{$store->store_image}}" alt="店頭写真">
                        @endif
                        <p>店舗外観</p>
                    </div>
                    <div class="shop-detail-link">
                        @if($store->store_image == null)
                        <img class="post-img" src="{{ asset('css/noimage.png') }}" alt="NO_IMAGE">
                        @else
                        <img src="{{$store->store_image}}" alt="店内写真">
                        @endif
                        <p>店舗内</p>
                    </div>
                </div>
            </div>
            <div class="shop-map">
                <h3>地図</h3>
                <div class="shop-detail-link">
                    <iframe
                        src="https://maps.google.co.jp/maps?output=embed&q={{$store->latitude}}, {{$store->longitude}}"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="294"
                        height="220"></iframe>
                </div>
            </div>
        </div>{{-- .shop --}}
    </section>
    <hr>
    <section class="bottom-menu">
        {{-- 看板メニュー --}}
        {{-- <div class="recommend-shops">
            <h3 class="sub-title upper">看板メニュー</h3>
            <div class="recommends">
                <div class="detail-link">
                    @if($store->recommend_image == null)
                    <img class="post-img" src="../css/noimage.png" alt="NO_IMAGE">
                    @else
                    <img src="{{$store->recommend_image}}" alt="おすすめ商品">
        @endif
        <p>{{$store->recommend_product}}</p>
        </div>
        <div class="detail-link">
            @if($store->recommend_image == null)
            <img class="post-img" src="../css/noimage.png" alt="NO_IMAGE">
            @else
            <img src="{{$store->recommend_image}}" alt="おすすめ商品">
            @endif
            <p>{{$store->recommend_product}}</p>
        </div>
        <div class="spacer"></div>
        <div class="detail-link">
            @if($store->recommend_image == null)
            <img class="post-img" src="../css/noimage.png" alt="NO_IMAGE">
            @else
            <img src="{{$store->recommend_image}}" alt="おすすめ商品">
            @endif
            <p>{{$store->recommend_product}}</p>
        </div>
        <div class="detail-link">
            @if($store->recommend_image == null)
            <img class="post-img" src="../css/noimage.png" alt="NO_IMAGE">
            @else
            <img src="{{$store->recommend_image}}" alt="おすすめ商品">
            @endif
            <p>{{$store->recommend_product}}</p>
        </div>
        </div>recommend_shops --}}
        </div>
        {{-- 口コミ一覧 --}}
        <div class="review">
            <div class="posting">
                <h3>口コミ一覧</h3>
                {{-- <button type="submit" class="btn-text-danger"> --}}
                    <a href="/reviews/create?id={{$store->id}}">
                        <img src="{{ asset('css/rogo_addreview.jpg') }}" alt="口コミ鉛筆" class="rogo">
                    </a>
                {{-- </button> --}}
                <div class="word font">
                    <p>口コミを投稿する</p>
                </div>
            </div>
            <div class="review-wrapper">
                {{-- 投稿した内容を表示 --}}
                @foreach ($store->reviews as $review)
                <div class="review-details">
                    <dl class="posted-data">
                        @if($review->user)
                        <dt class="post-title row">{{$review->user->name}}さんの口コミ</dt>
                        @else
                        <dt class="post-title row">退会されたユーザーの口コミ</dt>
                        @endif
                        <dt class="post-title date">投稿日時：</dt>
                        <dd class="date">{{$review->published_at}}</dd>
                        <dt class="post-title">食べたもの：</dt>
                        <dd>{{$review->reviews()['ate_thing']}}</dd>
                        <dt class="post-title">カテゴリー：</dt>
                        <dd>{{$review->category->name}}</dd>
                        <dt class="post-title">支払額：</dt>
                        <dd>{{$review->reviews()['charge']}}円</dd>
                    </dl>
                    <div class="average">
                        <span class="star">
                            <span>
                                {{$review->review >= 1 ? '★' : '☆' }}
                            </span>
                            <span>
                                {{$review->review >= 2 ? '★' : '☆' }}
                            </span>
                            <span>
                                {{$review->review >= 3 ? '★' : '☆' }}
                            </span>
                            <span>
                                {{$review->review >= 4 ? '★' : '☆' }}
                            </span>
                            <span>
                                {{$review->review >= 5 ? '★' : '☆' }}
                            </span>
                        </span>
                        <span class="value">{{$review->comment}}</span>
                    </div>
                </div>
                @if ($review->post_image)
                <img src="{{$review->post_image}}" alt="投稿写真">
                @else
                <img class="post-img" src="{{ asset('css/noimage.png') }}" alt="NO_IMAGE">
                @endif
                @endforeach
            </div>{{-- review-wrapper --}}
        </div>
    </section>
</body>

</html>
@endsection