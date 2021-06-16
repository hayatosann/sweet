@extends('layouts.header')

@section('css')
<link rel="stylesheet" href="./css/style.css">
@endsection

@section('content')
    <div class="container">
        <div class="subject">
            <div class="search">
                <h2 class="subject font">検索結果</h2>
                {{-- <button class="all_clear font"><form action="">検索条件をリセット</form></button>
                <h3 class="selected font">指定条件</h3>
                <ul class="selected_conditions font">(条件が入る）どう引っ張る？？</ul> --}}
            </div>
        </div>

        @foreach ($stores as $detail)
        <div class="review">
          <div class="content">
            <div class="storephoto">
                @if($detail->store_image == null)
                <img class="post-img" src="./css/noimage.png" alt="NO_IMAGE">
                @else
                <img src="{{$detail->store_image}}" alt="店舗写真">
                @endif
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
                <a href="/reviews/create?id={{$detail->id}}">
                       <img src="./css/rogo_addreview.jpg" alt="口コミ鉛筆" class="rogo"></a>
                <div class="word font">
                    <p>口コミを投稿する</p>
                </div>
            </div>
            <div class="info font">
                <p>{{ $detail->name }}</p>
                <p>{{ $detail->address }}</p>
                <p>{{ $detail->category->name }}</p>
                <p>{{ $detail->price }}</p>
                <div class="stars">
                <span class="star font">
                    <span>
                        {{$detail->review >= 1 ? '★' : '☆' }}
                    </span>
                    <span>
                        {{$detail->review  >= 2 ? '★' : '☆' }}
                    </span>
                    <span>
                        {{$detail->review  >= 3 ? '★' : '☆' }}
                    </span>
                    <span>
                        {{$detail->review  >= 4 ? '★' : '☆' }}
                    </span>
                    <span>
                        {{$detail->review  >= 5 ? '★' : '☆' }}
                    </span>
                </span>
                <span class="value font">{{$detail->review}}</span>
                </div>
                <div class="button">
                <button><a href="{{route('stores.show', $detail->id)}}">詳細</a></button>
                </div>
            </div> 
            <div class="usercoment font">
                <div class="userinfo">
                <p>{{ $detail->bestreview()['user_id->name'] }}さんの口コミ</p>
                <p class="add_time">投稿日時：{{ $detail->bestreview()['created_at'] }}</p>
                </div>
                <span class="star font">
                    <span>
                        {{$detail->bestreview()['review'] >= 1 ? '★' : '☆' }}
                    </span>
                    <span>
                        {{$detail->bestreview()['review'] >= 2 ? '★' : '☆' }}
                    </span>
                    <span>
                        {{$detail->bestreview()['review'] >= 3 ? '★' : '☆' }}
                    </span>
                    <span>
                        {{$detail->bestreview()['review'] >= 4 ? '★' : '☆' }}
                    </span>
                    <span>
                        {{$detail->bestreview()['review'] >= 5 ? '★' : '☆' }}
                    </span>
                </span>
                <span class="value font">{{$detail->bestreview()['review']}}</span>
                <p>{{ $detail->bestreview()['comment'] }}</p>
                <div class="button">
                <button><a href="{{route('stores.show', $detail->id)}}">続きを見る</a></button>
                </div>
            </div>
          </div>
        </div>
        @endforeach
    </div>


</body>
</html>
@endsection