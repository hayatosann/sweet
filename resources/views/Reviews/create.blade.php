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
            <div class="shop">
                <div class="shop-data">
                    <h4 class="sub-title">店舗情報</h4>
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
                    <h4>{{$store->name}}</h4>
                    <div class="average">
                        <span class="star font spacing">
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
                        <span class="value">（{{$store->rating}}）</span>
                    </div>
                    <div class="shop-data-center">
                        <dl class="data_a">
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
                    <h4 class="sub-title">店舗写真</h4>
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
                    <h4>地図</h4>
                    <div class="shop-detail-link">
                        <iframe
                            src="https://maps.google.co.jp/maps?output=embed&q={{$store->latitude}}, {{$store->longitude}}"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="180"
                            height="120"></iframe>
                    </div>
                </div>
            </div>{{-- .shop --}}
    </section>
    <hr>
    <section class="bottom-menu">
        {{-- おすすめ近隣店舗 --}}
        {{-- <div class="recommend-shops">
            @foreach ($stores as $store)
            <h3 class="sub-title  upper">おすすめ近隣店舗</h3>
            <div class="recommends">
                <div class="detail-link">
                    <img src="/css/noimage.png" alt="おすすめ商品">
                    @if($store->recommend_image !== null)
                    <a href="{{route('stores.show')}}" method="GET">
        <img src="{{$path}}" alt="おすすめ商品">
        </a>
        @else
        <img class="post-img" src="/css/noimage.png" alt="NO_IMAGE">
        @endif
        <p>{{$store->recomm}}</p>
        <a href="{{route('stores.show')}}" method="GET">
            <p>{{$store->name}}</p>
        </a>
        <button class="detail"><a href="{{route('stores.show')}}" method="GET">詳細</a></button>
        </div>
        <div class="detail-link">
            <a href=""><img src="/css/noimage.png" alt="店舗詳細リンク"></a>
            <a href="">
                <p>店舗の名前</p>
            </a>
            <button class="detail"><a href="">詳細</a></button>
        </div>
        <div class="spacer"></div>
        <div class="detail-link">
            <a href=""><img src="/css/noimage.png" alt="店舗詳細リンク"></a>
            <a href="">
                <p>店舗の名前</p>
            </a>
            <button class="detail"><a href="">詳細</a></button>
        </div>
        <div class="detail-link">
            <a href=""><img src="/css/noimage.png" alt="店舗詳細リンク"></a>
            <a href="">
                <p>店舗の名前</p>
            </a>
            <button class="detail"><a href="">詳細</a></button>
        </div>
        </div>
        @endforeach
        </div> --}}
        {{-- 口コミ編集フォーム --}}
        <div class="review-form">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action=" {{route('reviews.store')}} " method="post" enctype='multipart/form-data'>
                @csrf
                <input type="hidden" name="store_id" value="{{$store->id}}">
                <div class="rate">
                    <p>評価(★)</p>
                    <select name="review">
                        <option value="0">☆☆☆☆☆</option>
                        <option value="1">★☆☆☆☆</option>
                        <option value="2">★★☆☆☆</option>
                        <option value="3">★★★☆☆</option>
                        <option value="4">★★★★☆</option>
                        <option value="5">★★★★★</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>口コミ内容記入</label>
                    <textarea type="text" name="comment" class="form-control" placeholder="お店の雰囲気などを記入してください" cols="110"
                        rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label class="space">食べたもの</label>
                    <input type="text" name="ate_thing" class="form-control">
                </div>
                <div class="form-group">
                    <label class="space">支払額</label>
                    <input type="text" name="charge" class="form-control">
                </div>
                <div class="form-group">
                    <label class="space">カテゴリ</label>
                    <select id="sweets" name="category_id">
                        <option value="1">ケーキ
                        </option>
                        <option value="2">タルト、パイ
                        </option>
                        <option value="3">プリン
                        </option>
                        <option value="4">チョコレート
                        </option>
                        <option value="5">シュークリーム
                        </option>
                        <option value="6">クッキー
                        </option>
                        <option value="7">アイスクリーム、シャーベット</option>
                        <option value="8">クレープ
                        </option>
                        <option value="9">パフェ
                        </option>
                        <option value="10">その他
                        </option>
                    </select>
                </div>
                <div class="low">
                    <div class="form-group picture">
                        <label class="space">写真</label>
                        <label>
                            <input ref="photo" name="post_image" type="file" class="form-control"
                                accept="image/gif,image/jpeg,image/png" @change="onFileChange" multiple>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="space">公開日</label>
                        <input type="date" name="published_at">
                    </div>
                    {{-- アクションボタンたち --}}
                    <div class="buttons">
                        <div class="action-button">
                            <div class="text-right">
                                <button type="submit" class="btn overwrite" value="保存">上書きして保存</button>
                            </div>
                            <div class="spacer"></div>
                            <div class="text-right">
                                <button type="submit" class="btn post">口コミを投稿する</button>
                            </div>
                            {{-- <div class="text-right">
                                <button type="submit" name="draft" class="btn save-draft">下書きに保存</button>
                            </div> --}}
                        </div>{{-- action-button --}}
                    </div>{{-- buttons --}}
                </div>
                {{-- low --}}
            </form>
        </div>{{-- review-form --}}
    </section>{{-- bottom-menu --}}
</body>

</html>
@endsection