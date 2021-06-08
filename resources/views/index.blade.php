<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>

    </header>

    <div class="container">
        <div class="subject">
            <div class="search">
                <h2 class="subject font">検索結果</h2>
                <button class="all_clear font"><form action="">検索条件をリセット</form></button>
                <h3 class="selected font">指定条件</h3>
                <ul class="selected_conditions font">(条件が入る）</ul>
            </div>
        </div>

        @foreach ($stores as $detail)
        <div class="review">
            <div class="storephoto">
                <a href=""><img src="" alt="店舗写真"></a>
            </div>
            <div class="add">
                <div class="word font">
                    <p>お気に入りに追加</p>
                </div>
                <form action="{{ route('favorites.store') }}" method="POST">
                    @csrf
                    <!-- お気に入りを押してstoreとuserのidをDBに送る -->
                        <input type="hidden" name="store_id" value="<?php echo $detail['store_id']; ?>">             
                        <button type="submit" class="btn text-danger"><img src="./css/rogo_okiniiri.jpg" alt="お気に入り星" class="rogo"></button>
                </form>
            <a href=""><img src="./css/rogo_addreview.jpg" alt="口コミ鉛筆" class="rogo"></a>
                <div class="word font">
                    <p>口コミを投稿する</p>
                </div>
            </div>
            <div class="info font">
                <p>{{ $detail->name }}（店舗名引っ張る）</p>
                <p>{{ $detail->address }}（住所引っ張る）</p>
                <p>{{ $detail->category->name }}（カテゴリ引っ張る）</p>
                <p>{{ $detail->price }}（価格引っ張る）</p>
                <p>{{ $detail->reviews->review }}（評価のポイント平均引っ張る）</p> 
                {{-- ↑ここの情報の引っ張り方は村田さんに確認する --}}
                <button><a href="">詳細</a></button>
            </div>
            <div class="comment font">
                <p>{{ $detail->user->id }}（ユーザーネーム引っ張る）さんの口コミ</p>
                <p>投稿日時：{{ $detail->created_at }}（create時間引っ張る）</p>
                <p>{{ $detail->reviews->review }}（評価引っ張る）</p>
                {{-- ↑ここの情報の引っ張り方は村田さんに確認する --}}
                <p>{{ $detail->reviews->comment }}（コメント引っ張る）</p>
                <button><a href="">続きを見る・・・</a></button>
            </div>
        </div>
        {{-- @endforeach --}}
    </div>


</body>
</html>