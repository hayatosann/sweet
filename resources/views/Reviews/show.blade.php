<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>店舗情報</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <section class="upper-menu">
        <a href="">
            <p class="go_back">一つ前に戻る</p>
        </a>
        <div class="shop">
            @foreach ($stores as $store)
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
                    <div v-for="star in [5,4,3,2,1]">
                        <input v-model="reviewParams.stars" type="radio" :value="star">
                        <v-star :value="star"></v-star>
                    </div>
                    <span class="value">{{$store->review}}</span>
                </div>
                <div class="shop-data-center">
                    <dl>
                        <dt>カテゴリー：</dt>
                        <dd>{{$store->category_id}}</dd>
                        <dt>エリア：</dt>
                        <dd>{{$store->prefecture_id}}</dd>
                        <dt>予算：</dt>
                        <dd>{{$store->price}}円</dd>
                    </dl>
                    <div class="okini">
                        <div class="word font">
                            <p>お気に入りに追加</p>
                        </div>
                        <form action="{{ route('favorites.store') }}" method="POST">
                            @csrf
                            <input type="hi
                                dden" name="store_id" value="{{ $detail->id }}">
                            <button type="submit" class="btn text-danger"><img src="./css/rogo_okiniiri.jpg"
                                    alt="お気に入り星" class="rogo"></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="shop-photo">
                <h3 class="sub-title">店舗写真</h3>
                <div class="shop-photos">
                    <div class="shop-detail-link">
                        @if({{$store->store_image}})
                        <img src="{{$path}}" alt="店頭写真">
                        @else
                        <img class="post-img" src="/css/noimage.png" alt="NO_IMAGE">
                        @endif
                        <p>店舗外観</p>
                    </div>
                    <div class="shop-detail-link">
                        @if({{$store->store_image}})
                        <img src="{{$path}}" alt="店内写真">
                        @else
                        <img class="post-img" src="/css/noimage.png" alt="NO_IMAGE">
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
            @endforeach
        </div>{{-- .shop --}}
    </section>
    <hr>
    <section class="bottom-menu">
        {{-- 看板メニュー --}}
        <div class="recommend-shops">
            @foreach ($stores as $store)
            <h3 class="sub-title upper">看板メニュー</h3>
            <div class="recommends">
                <div class="detail-link">
                    @if({{$store->recommend_image}})
                    <img src="{{$path}}" alt="おすすめ商品">
                    @else
                    <img class="post-img" src="/css/noimage.png" alt="NO_IMAGE">
                    @endif
                    <p>{{$store->recommend_product}}</p>
                </div>
                <div class="detail-link">
                    <img src="/css/noimage.png" alt="おすすめ商品">
                    <p>商品名</p>
                </div>
                <div class="spacer"></div>
                <div class="detail-link">
                    <img src="/css/noimage.png" alt="おすすめ商品">
                    <p>商品名</p>
                </div>
                <div class="detail-link">
                    <img src="/css/noimage.png" alt="おすすめ商品">
                    <p>商品名</p>
                </div>
            </div>{{-- recommend_shops --}}
            @endforeach
        </div>
        {{-- 口コミ一覧 --}}
        <div class="review">
            <div class="posting">
                <h3>口コミ一覧</h3>
                @foreach ($stores as $store )
                <form action="{{ route('reviews.create') }}" method="GET">
                    @csrf
                    <input type="hi
                    dden" name="" id="">
                    <button type="submit" class="btn-text-danger">
                        <img src="./css/rogo_addreview.jpg" alt="口コミ鉛筆" class="rogo">te
                    </button>
                    <div class="word font">
                        <p>口コミを投稿する</p>
                    </div>
                    @endforeach
            </div>
            <div class="review-wrapper">
                @foreach ($reviews as $review)
                <div class="review-details">
                    <dl class="posted-data">
                        <dt class="post-title row">{{$reviews->name}}さんの口コミ</dt>
                        <dt class="post-title date">投稿日時：</dt>
                        <dd class="date">{{$reviews->published_at}}</dd>
                        <dd>カテゴリー</dd>
                        <dt class="post-title">食べたもの：</dt>
                        <dd>{{$reviews->ate_thing}}</dd>
                        <dt class="post-title">カテゴリー：</dt>
                        <dd>{{$reviews->category_id}}</dd>
                        <dt class="post-title">支払額：</dt>
                        <dd>{{$reviews->charge}}円</dd>
                    </dl>
                    <div class="average">
                        <span class="star">
                            <span>
                                {{ {{$reviews->review}} > 1 ? '★' : '☆' }}
                            </span>
                            <span>
                                {{ {{$reviews->review}} > 2 ? '★' : '☆' }}
                            </span>
                            <span>
                                {{ {{$reviews->review}} > 3 ? '★' : '☆' }}
                            </span>
                            <span>
                                {{ {{$reviews->review}} > 4 ? '★' : '☆' }}
                            </span>
                            <span>
                                {{ {{$reviews->review}} > 5 ? '★' : '☆' }}
                            </span>
                        </span>
                        <span class="value">{{$reviews->review}}</span>
                    </div>
                </div>
                @if ({{$reviews->post_image}})
                <img src="{{$path}}" alt="投稿写真">
                @else
                <img class="post-img" src="/css/noimage.png" alt="NO_IMAGE">
                @endif
                @endforeach
            </div>{{-- review-wrapper --}}
            <div class="review-wrapper">
                {{-- 投稿した内容を表示 --}}
                <div class="review-details">
                    <dl class="posted-data">
                        <dt class="post-title row">〇〇さんの口コミ</dt>
                        <dt class="post-title date">投稿日時：</dt>
                        <dd class="date">投稿日時</dd>
                        <dd>カテゴリー</dd>
                        <dt class="post-title">食べたもの：</dt>
                        <dd>食べたもの</dd>
                        <dt class="post-title">カテゴリー：</dt>
                        <dd>カテゴリー</dd>
                        <dt class="post-title">支払額：</dt>
                        <dd>0000円</dd>
                    </dl>
                    <div class="average">
                        <span class="star">(口コミの★を表示)</span>
                        <span class="value">(review)の値</span>
                    </div>
                    <p class="review-words">review-words">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Illo
                        dicta neque
                        distinctio labore ipsa corporis sint perferendis earum cupiditate saepe magnam assumenda,
                        maxime
                        velit sequi, ea ratione, cumque dolore libero?
                    </p>
                </div>
                <img class="post-img" src="/css/noimage.png" alt="投稿写真">
            </div>{{-- review-wrapper --}}
            <div class="review-wrapper">
                {{-- 投稿した内容を表示 --}}
                <div class="review-details">
                    <dl class="posted-data">
                        <dt class="post-title row">〇〇さんの口コミ</dt>
                        <dt class="post-title date">投稿日時：</dt>
                        <dd class="date">投稿日時</dd>
                        <dd>カテゴリー</dd>
                        <dt class="post-title">食べたもの：</dt>
                        <dd>食べたもの</dd>
                        <dt class="post-title">カテゴリー：</dt>
                        <dd>カテゴリー</dd>
                        <dt class="post-title">支払額：</dt>
                        <dd>0000円</dd>
                    </dl>
                    <div class="average">
                        <span class="star">(口コミの★を表示)</span>
                        <span class="value">(review)の値</span>
                    </div>
                    <p class="review-words">review-words">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Illo
                        dicta neque
                        distinctio labore ipsa corporis sint perferendis earum cupiditate saepe magnam assumenda,
                        maxime
                        velit sequi, ea ratione, cumque dolore libero?
                    </p>
                </div>
                <img class="post-img" src="/css/noimage.png" alt="投稿写真">
            </div>{{-- review-wrapper --}}
        </div>
    </section>
</body>

</html>