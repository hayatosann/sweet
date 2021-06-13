<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>口コミ投稿・編集</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
    <section class="upper-menu">
        <a href="">
            <p class="go_back">一つ前に戻る</p>
        </a>
        <div class="shop">
            <div class="shop-data">
                <h3 class="sub-title upper">店舗情報</h3>
                <dl class="data_a">
                    <dt>住所</dt>
                    <dd>〇〇県〇〇市〇〇区〇〇３−２−１</dd>
                    <dt>営業時間</dt>
                    <dd>00:00〜00:00</dd>
                    <dt>定休日</dt>
                    <dd>○曜日</dd>
                    <dt>電話番号</dt>
                    <dd>00-0000-0000</dd>
                    <dt>URLリンク</dt>
                    <dd><a href="https://cake.jp/shops/" target="_blank">
                            <p>https://cake.jp/shops/</p>
                        </a></dd>
                </dl>
            </div>
            <div class="shop-review-data">
                <h2>店舗の名前</h2>
                <div class="average">
                    <span class="star">(平均点の値から★を表示)</span>
                    <span class="value">(review)の値</span>
                </div>
                <div class="shop-data-center">
                    <dl>
                        <dt class="">カテゴリー：</dt>
                        <dd>カテゴリー</dd>
                        <dt>エリア：</dt>
                        <dd>エリア</dd>
                        <dt>予算：</dt>
                        <dd>0000円〜0000円</dd>
                    </dl>
                    <div class="okini">
                        <div class="word font">
                            <p>お気に入りに追加</p>
                        </div>
                        <a href=""><img src="./css/rogo_okiniiri.jpg" alt="お気に入り星" class="rogo"></a>
                    </div>
                </div>
            </div>
            <div class="shop-photo">
                <h3 class="sub-title">店舗写真</h3>
                <div class="shop-photos">
                    <div class="shop-detail-link">
                        <img src="/css/noimage.png" alt="店舗外観">
                        <p>店舗外観</p>
                    </div>
                    <div class="shop-detail-link">
                        <img src="/css/noimage.png" alt="店舗内">
                        <p>店舗内</p>
                    </div>
                </div>
            </div>
            <div class="shop-map">
                <h3 class="sub-title upper2">地図</h3>
                <div class="shop-detail-link">
                    <iframe src="https://maps.google.co.jp/maps?output=embed&q=35.670821,139.702726" frameborder="0"
                        scrolling="no" marginheight="0" marginwidth="0" width="294" height="220"></iframe>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="bottom-menu">
        {{-- おすすめ近隣店舗 --}}
        <div class="recommend-shops">
            @foreach ($stores as $store)
            <h3 class="sub-title  upper">おすすめ近隣店舗</h3>
            <div class="recommends">
                <div class="detail-link">
                    <img src="/css/noimage.png" alt="おすすめ商品">
                    @if({{$store->recommend_image}})
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
        </div>
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
            <form action=" {{route('reviews.create')}} " method="post">
                @csrf
                <div class="rate">
                    <p>評価(★)</p>
                    <select name="rating">
                        <option value="0" selected @if(old('comment')=='0' ) selected @endif>☆☆☆☆☆</option>
                        <option value="1" selected @if(old('comment')=='1' ) selected @endif>★☆☆☆☆</option>
                        <option value="2" selected @if(old('comment')=='2' ) selected @endif>★★☆☆☆</option>
                        <option value="3" selected @if(old('comment')=='3' ) selected @endif>★★★☆☆</option>
                        <option value="4" selected @if(old('comment')=='4' ) selected @endif>★★★★☆</option>
                        <option value="5" selected @if(old('comment')=='5' ) selected @endif>★★★★★</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>口コミ内容記入</label>
                    <textarea type="text" name="comment" class="form-control" placeholder="お店の雰囲気などを記入してください" cols="110"
                        rows="3">{{old('comment'),$reviews->comment}}</textarea>
                </div>
                <div class="form-group">
                    <label class="space">食べたもの</label>
                    <input type="text" name="ate_thing" class="form-control"
                        value="{{old('ate_thing'),$reviews->ate_thing}}">
                </div>
                <div class="form-group">
                    <label class="space">支払額</label>
                    <input type="text" name="charge" class="form-control" value="{{old('charge'),$reviews->charge}}">
                </div>
                <div class="form-group">
                    <label class="space">カテゴリ</label>
                    <select id="sweets">
                        <option value="category_id" selected @if(old('category_id')=='ケーキ' ) selected @endif>ケーキ
                        </option>
                        <option value="category_id" selected @if(old('category_id')=='タルト、パイ' ) selected @endif>タルト、パイ
                        </option>
                        <option value="category_id" selected @if(old('category_id')=='プリン' ) selected @endif>プリン
                        </option>
                        <option value="category_id" selected @if(old('category_id')=='チョコレート' ) selected @endif>チョコレート
                        </option>
                        <option value="category_id" selected @if(old('category_id')=='シュークリーム' ) selected @endif>シュークリーム
                        </option>
                        <option value="category_id" selected @if(old('category_id')=='クッキー' ) selected @endif>クッキー
                        </option>
                        <option value="category_id" selected @if(old('category_id')=='アイスクリーム、シャーベット' ) selected @endif>
                            アイスクリーム、シャーベット</option>
                        <option value="category_id" selected @if(old('category_id')=='クレープ' ) selected @endif>クレープ
                        </option>
                        <option value="category_id" selected @if(old('category_id')=='クレープ' ) selected @endif>パフェ
                        </option>
                        <option value="category_id" selected @if(old('category_id')=='その他' ) selected @endif>その他
                        </option>
                    </select>
                </div>
                <div class="low">
                    <div class="form-group picture">
                        <label class="space">写真</label>
                        <label>
                            <input ref="photo" name="post_image" value="{{old('post_image'),$reviews->post_image}}"
                                type="file" class="form-control" accept="image/gif,image/jpeg,image/png"
                                @change="onFileChange" multiple>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="space">投稿日時</label>
                        <input type="date" name="created_at" value="{{old('created_at'),$reviews->created_at}}">
                    </div>
                    {{-- アクションボタンたち --}}
                    <div class="buttons">
                        <div class="action-button">
                            <div class="text-right">
                                <button type="submit" class="btn overwrite" value="保存">上書きして保存</button>
                            </div>
                            <div class="text-right">
                                @csrf
                                @method('delete')
                                <button type="submit" formaction=' {{ route('reviews.destroy', $review->id)}} '
                                    method='post' class="btn delete">口コミを削除する</button>
                            </div>
                            <div class="spacer"></div>
                            <div class="text-right">
                                <button type="submit" class="btn post">口コミを投稿する</button>
                            </div>
                            <div class="text-right">
                                @if{{$review->published_at < $review->created_at }}
                                <button type="submit" name="draft" class="btn save-draft">下書きに保存</button>
                                @endif
                            </div>
                        </div>{{-- action-button --}}
                    </div>{{-- buttons --}}
                </div>
                {{-- low --}}
            </form>
        </div>{{-- review-form --}}
    </section>{{-- bottom-menu --}}
</body>

</html>