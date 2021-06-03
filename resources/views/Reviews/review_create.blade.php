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
            <p>一つ前に戻る</p>
        </a>
        <div class="shop-review-data">
            <h2>店舗の名前(name)</h2>
            <div class="average">
                <span class="star">(平均点の値から★を表示)</span>
                <span class="value">(review)の値</span>
            </div>
            <dl>
                <dt class="">カテゴリー：</dt>
                <dd>(category_id)の値</dd>
                <dt>エリア：</dt>
                <dd>(prefecture_id)の値</dd>
                <dt>予算：</dt>
                <dd>(price)のid</dd>
            </dl>
        </div>
    </section>

    <section class="bottom-menu">
        {{-- おすすめ近隣店舗 --}}
        <div class="recommend-shops">
            <div class="shop-detail-link">
                <a href=""><img src="{{-- $pass --}}" alt="店舗詳細リンク"></a>
                <a href="">
                    <p>店舗の名前</p>
                </a>
                <button class="detail">詳細</button>
            </div>
            <div class="shop-detail-link">
                <a href=""><img src="{{-- $pass --}}" alt="店舗詳細リンク"></a>
                <a href="">
                    <p>店舗の名前</p>
                </a>
                <button class="detail">詳細</button>
            </div>
            <div class="spacer"></div>
            <div class="shop-detail-link">
                <a href=""><img src="{{-- $pass --}}" alt="店舗詳細リンク"></a>
                <a href="">
                    <p>店舗の名前</p>
                </a>
                <button class="detail">詳細</button>
            </div>
            <div class="shop-detail-link">
                <a href=""><img src="{{-- $pass --}}" alt="店舗詳細リンク"></a>
                <a href="">
                    <p>店舗の名前</p>
                </a>
                <button class="detail">詳細</button>
            </div>
        </div>
        {{-- 口コミ編集フォーム --}}
        <article class="review-form">
            <form action="#" method="post">
                <div class="rate">
                    <p>評価(★)</p>
                    <select name="rating">
                        <option value="star">☆☆☆☆☆</option>
                        <option value="star">★☆☆☆☆</option>
                        <option value="star">★★☆☆☆</option>
                        <option value="star">★★★☆☆</option>
                        <option value="star">★★★★☆</option>
                        <option value="star">★★★★★</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>口コミ内容記入</label>
                    <textarea type="text" class="form-control" id="" cols="120" rows="3"></textarea>
                </div>
                <div class="middle">
                    <div class="form-group">
                        <label class="space">食べたもの</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="space">支払額</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="space">カテゴリ</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group row">
                    <label class="space">写真</label>
                    <input ref="photo" type="file" class="form-control" accept="image/gif,image/jpeg,image/png"
                        @change="onFileChange" multiple>
                </div>
                <div class="form-group row">
                    <label class="space">投稿日時</label>
                    <input type="text" class="form-control">
                </div>
                <div class="low">
                    {{-- アクションボタンたち --}}
                    <div class="action-button">
                        <div class="text-right">
                            <button type="button" class="btn overwrite">上書きして保存</button>
                        </div>
                        <div class="text-right">
                            <button type="button" class="btn delete">口コミを削除する</button>
                        </div>
                        <div class="spacer"></div>
                        <div class="text-right">
                            <button type="button" class="btn post">口コミを投稿する</button>
                        </div>
                        <div class="text-right">
                            <button type="button" class="btn save-draft">下書きに保存</button>
                        </div>
                    </div>{{-- action-button --}}
                </div>{{-- low --}}
            </form>
        </article>{{-- review-form --}}
    </section>{{-- bottom-menu --}}
</body>

</html>