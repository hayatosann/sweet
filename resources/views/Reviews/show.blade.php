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
            <div class="shop-data">
                <h3 class="sub-title">店舗情報</h3>
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
                        <dt>カテゴリー：</dt>
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
                <h3>地図</h3>
                <div class="shop-detail-link">
                    <iframe src="https://maps.google.co.jp/maps?output=embed&q=35.670821,139.702726" frameborder="0"
                        scrolling="no" marginheight="0" marginwidth="0" width="294" height="220"></iframe>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="bottom-menu">
        {{-- 看板メニュー --}}
        <div class="recommend-shops">
            <h3 class="sub-title upper">看板メニュー</h3>
            <div class="recommends">
                <div class="detail-link">
                    <img src="/css/noimage.png" alt="おすすめ商品">
                    <p>商品名</p>
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
            </div>
        </div>
        {{-- 口コミ一覧 --}}
        <div class="review">
            <div class="posting">
                <h3>口コミ一覧</h3>
                <a href=""><img src="./css/rogo_addreview.jpg" alt="口コミ鉛筆" class="rogo"></a>
                <div class="word font">
                    <p>口コミを投稿する</p>
                </div>
            </div>
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
                    <p class="review-words">review-words">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo
                        dicta neque
                        distinctio labore ipsa corporis sint perferendis earum cupiditate saepe magnam assumenda, maxime
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
                    <p class="review-words">review-words">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo
                        dicta neque
                        distinctio labore ipsa corporis sint perferendis earum cupiditate saepe magnam assumenda, maxime
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
                    <p class="review-words">review-words">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo
                        dicta neque
                        distinctio labore ipsa corporis sint perferendis earum cupiditate saepe magnam assumenda, maxime
                        velit sequi, ea ratione, cumque dolore libero?
                    </p>
                </div>
                <img class="post-img" src="/css/noimage.png" alt="投稿写真">
            </div>{{-- review-wrapper --}}
        </div>
    </section>
</body>

</html>