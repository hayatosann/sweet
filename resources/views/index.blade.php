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
                <ul class="selected_conditions font">(条件が入る）どう引っ張る？？</ul>
            </div>
        </div>

        @foreach ($stores as $detail)
        <div class="review">
          <div class="content">
            <div class="storephoto">
                <a href=""><img src="" alt="店舗写真"></a>
            </div>
            <div class="add">
                <div class="word font">
                    <p>お気に入りに追加</p>
                </div>
                <form action="{{ route('favorites.store') }}" method="POST">
                    @csrf
                        <input type="hidden" name="store_id" value="{{ $detail->id }}">             
                        <button type="submit" class="btn text-danger"><img src="./css/rogo_okiniiri.jpg" alt="お気に入り星" class="rogo"></button>
                </form>
            <a href=""><img src="./css/rogo_addreview.jpg" alt="口コミ鉛筆" class="rogo"></a>
                <div class="word font">
                    <p>口コミを投稿する</p>
                </div>
            </div>
            <div class="info font">
                <p>{{ $detail->name }}</p>
                <p>{{ $detail->address }}</p>
                <p>{{ $detail->category->name }}</p>
                <p>{{ $detail->price }}</p>
                <div v-for="star in [5,4,3,2,1]">
                    <input v-model="reviewParams.stars" type="radio" :value="star">
                    <v-star :value="star"></v-star>
                </div>
                {{-- ↑ここの情報の引っ張り方は村田さんに確認する --}}
                <div class="button">
                <button><a href="{{ route('stores.show', $detail->id)}}">詳細（どう飛ぶ？？）</a></button>
                </div>
            </div> 
            <div class="usercoment font">
                <div class="userinfo">
                <p>{{ $detail->bestreview()['name'] }}さんの口コミ</p>
                <p class="add_time">投稿日時：{{ $detail->bestreview()['created_at'] }}</p>
                </div>
                <div v-for="star in [5,4,3,2,1]">
                    <input v-model="reviewParams.stars" type="radio" :value="star">
                    <v-star :value="star"></v-star>
                </div>
                <p>{{ $detail->bestreview()['review'] }}</p>
                <p>{{ $detail->bestreview()['comment'] }}</p>
                <div class="button">
                <button><a href="{{ route('reviews.show', $detail->bestreview()['id'])}}">続きを見る・・・（どう飛ぶ？）</a></button>
                </div>
            </div>
          </div>
        </div>
        @endforeach
    </div>


</body>
</html>