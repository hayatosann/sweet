@extends('layouts.header')

@section('css')
<link rel="stylesheet" href="{{ asset('css/reset.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
<div class="m__box_bg_gray side_box_gray hide_sp_display" id="search_box">
    <!-- カテゴリー-->
    <section class="side_inner_sec">
        <h4 class="m__ttl_pinkbrd_left--small">エリア検索</h4>
                <input id="acd-check" class="acd-check" type="checkbox">
                <label class="acd-label" for="acd-check">＋北海道・東北</label>
                    <div class="acd-content">
               
                        <ul>
                            <li>
                                <input type="checkbox" name="pref[]" value="北海道" id="pref1" data-label="北海道" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref1" class="m__form__checkbox_label">北海道</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="青森県" id="pref2" data-label="青森県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref2" class="m__form__checkbox_label">青森県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="岩手県" id="pref3" data-label="岩手県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref3" class="m__form__checkbox_label">岩手県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="宮城県" id="pref4" data-label="宮城県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref4" class="m__form__checkbox_label">宮城県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="秋田県" id="pref5" data-label="秋田県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref5" class="m__form__checkbox_label">秋田県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="山形県" id="pref6" data-label="山形県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref6" class="m__form__checkbox_label">山形県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="福島県" id="pref7" data-label="福島県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref7" class="m__form__checkbox_label">福島県</label>
                            </li> 
                        </ul>
                    </div>
                              
                <input id="acd-check1" class="acd-check" type="checkbox">
                <label class="acd-label" for="acd-check1">＋関東</label>
                    <div class="acd-content">
                         <ul>
                            <li>
                                <input type="checkbox" name="pref[]" value="東京都" id="pref8" data-label="東京都" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref8" class="m__form__checkbox_label">東京都</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="神奈川県" id="pref9" data-label="神奈川県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref9" class="m__form__checkbox_label">神奈川県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="茨城県" id="pref10" data-label="茨城県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref10" class="m__form__checkbox_label">茨城県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="栃木県" id="pref11" data-label="栃木県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref11" class="m__form__checkbox_label">栃木県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="群馬県" id="pref12" data-label="群馬県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref12" class="m__form__checkbox_label">群馬県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="埼玉県" id="pref13" data-label="埼玉県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref13" class="m__form__checkbox_label">埼玉県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="千葉県" id="pref14" data-label="千葉県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref14" class="m__form__checkbox_label">千葉県</label>
                            </li>
                        </ul>
                    </div>
                <input id="acd-check2" class="acd-check" type="checkbox">
                <label class="acd-label" for="acd-check2">＋中部</label>
                    <div class="acd-content">
                        <ul>
                            <li>
                                <input type="checkbox" name="pref[]" value="新潟県" id="pref15" data-label="新潟県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref15" class="m__form__checkbox_label">新潟県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="富山県" id="pref16" data-label="富山県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref16" class="m__form__checkbox_label">富山県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="石川県" id="pref17" data-label="石川県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref17" class="m__form__checkbox_label">石川県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="福井県" id="pref18" data-label="福井県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref18" class="m__form__checkbox_label">福井県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="山梨県" id="pref19" data-label="山梨県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref19" class="m__form__checkbox_label">山梨県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="長野県" id="pref20" data-label="長野県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref20" class="m__form__checkbox_label">長野県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="岐阜県" id="pref21" data-label="岐阜県" class="m__form__checkbox_btn searchInputForm" checked="">
                                <label for="pref21" class="m__form__checkbox_label">岐阜県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="静岡県" id="pref22" data-label="静岡県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref22" class="m__form__checkbox_label">静岡県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="愛知県" id="pref23" data-label="愛知県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref23" class="m__form__checkbox_label">愛知県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="三重県" id="pref24" data-label="三重県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref24" class="m__form__checkbox_label">三重県</label>
                            </li>
                    </ul>
                </div>
            <input id="acd-check3" class="acd-check" type="checkbox">
            <label class="acd-label" for="acd-check3">＋関西</label>
                <div class="acd-content">
                    <ul>
                            <li>
                                <input type="checkbox" name="pref[]" value="大阪府" id="pref25" data-label="大阪府" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref25" class="m__form__checkbox_label">大阪府</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="滋賀県" id="pref26" data-label="滋賀県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref26" class="m__form__checkbox_label">滋賀県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="兵庫県" id="pref27" data-label="兵庫県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref27" class="m__form__checkbox_label">兵庫県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="京都府" id="pref28" data-label="京都府" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref28" class="m__form__checkbox_label">京都府</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="奈良県" id="pref29" data-label="奈良県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref29" class="m__form__checkbox_label">奈良県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="和歌山県" id="pref30" data-label="和歌山県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref30" class="m__form__checkbox_label">和歌山県</label>
                            </li>
                    </ul>
                </div>
                <input id="acd-check4" class="acd-check" type="checkbox">
            <label class="acd-label" for="acd-check4">＋中国・四国</label>
                <div class="acd-content">
                    <ul>
                             <li>
                                <input type="checkbox" name="pref[]" value="鳥取県" id="pref31" data-label="鳥取県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref31" class="m__form__checkbox_label">鳥取県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="島根県" id="pref32" data-label="島根県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref32" class="m__form__checkbox_label">島根県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="岡山県" id="pref33" data-label="岡山県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref33" class="m__form__checkbox_label">岡山県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="広島県" id="pref34" data-label="広島県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref34" class="m__form__checkbox_label">広島県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="山口県" id="pref35" data-label="山口県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref35" class="m__form__checkbox_label">山口県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="徳島県" id="pref36" data-label="徳島県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref36" class="m__form__checkbox_label">徳島県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="香川県" id="pref37" data-label="香川県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref37" class="m__form__checkbox_label">香川県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="愛媛県" id="pref38" data-label="愛媛県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref38" class="m__form__checkbox_label">愛媛県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="高知県" id="pref39" data-label="高知県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref39" class="m__form__checkbox_label">高知県</label>
                            </li>
                        </ul>
                </div>
                <input id="acd-check5" class="acd-check" type="checkbox">
            <label class="acd-label" for="acd-check5">＋九州・沖縄</label>
                <div class="acd-content">
                    <ul>
                            <li>
                                <input type="checkbox" name="pref[]" value="福岡県" id="pref40" data-label="福岡県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref40" class="m__form__checkbox_label">福岡県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="佐賀県" id="pref41" data-label="佐賀県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref41" class="m__form__checkbox_label">佐賀県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="長崎県" id="pref42" data-label="長崎県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref42" class="m__form__checkbox_label">長崎県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="熊本県" id="pref43" data-label="熊本県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref43" class="m__form__checkbox_label">熊本県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="大分県" id="pref44" data-label="大分県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref44" class="m__form__checkbox_label">大分県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="宮崎県" id="pref45" data-label="宮崎県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref45" class="m__form__checkbox_label">宮崎県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="鹿児島県" id="pref46" data-label="鹿児島県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref46" class="m__form__checkbox_label">鹿児島県</label>
                            </li>
                            <li>
                                <input type="checkbox" name="pref[]" value="沖縄県" id="pref47" data-label="沖縄県" class="m__form__checkbox_btn searchInputForm">
                                <label for="pref47" class="m__form__checkbox_label">沖縄県</label>
                            </li>
                     </ul>
                </div>
            
    </section>

    <!-- カテゴリー -->
    <section class="side_inner_sec side_inner_sec--border_top sec_rush">
        <h4 class="m__ttl_pinkbrd_left--small">カテゴリーを選択</h4>
        <ul class="list_column2">
            <li>
                <input type="checkbox" name="category[]" value="cake" id="cake" data-label="ケーキ" class="m__form__checkbox_btn searchInputForm">
                <label for="cake" class="m__form__checkbox_label">ケーキ</label>
            </li>
            <li>
                <input type="checkbox" name="category[]" value="tart-pai" id="tart-pai" data-label="タルト、パイ" class="m__form__checkbox_btn searchInputForm">
                <label for="tart-pai" class="m__form__checkbox_label">タルト、パイ</label>
            </li>
            <li>
                <input type="checkbox" name="category[]" value="pudding" id="pudding" data-label="プリン" class="m__form__checkbox_btn searchInputForm">
                <label for="pudding" class="m__form__checkbox_label">プリン</label>
            </li>
            <li>
                <input type="checkbox" name="category[]" value="chocolate" id="largecake" data-label="チョコレート" class="m__form__checkbox_btn searchInputForm">
                <label for="chocolate" class="m__form__checkbox_label">チョコレート</label>
            </li>
            <li>
                <input type="checkbox" name="category[]" value="shukurimu" id="shukurimu" data-label="シュークリーム" class="m__form__checkbox_btn searchInputForm">
                <label for="shukurimu" class="m__form__checkbox_label">シュークリーム</label>
            </li>
            <li>
                <input type="checkbox" name="category[]" value="cookie" id="cookie" data-label="クッキー" class="m__form__checkbox_btn searchInputForm">
                <label for="cookie" class="m__form__checkbox_label">クッキー</label>
            </li>
            <li>
                <input type="checkbox" name="category[]" value="ice-sherbet" id="ice-sherbet" data-label="アイスクリーム、シャーベット" class="m__form__checkbox_btn searchInputForm">
                <label for="ice-sherbet" class="m__form__checkbox_label">アイスクリーム、シャーベット</label>
            </li>
            <li>
                <input type="checkbox" name="category[]" value="crepe" id="crepe" data-label="クレープ" class="m__form__checkbox_btn searchInputForm">
                <label for="crepe" class="m__form__checkbox_label">クレープ</label>
            </li>
            <li>
                <input type="checkbox" name="category[]" value="parfait" id="parfait" data-label="パフェ" class="m__form__checkbox_btn searchInputForm">
                <label for="parfait" class="m__form__checkbox_label">パフェ</label>
            </li>
            <li>
                <input type="checkbox" name="category[]" value="other" id="other" data-label="他" class="m__form__checkbox_btn searchInputForm">
                <label for="other" class="m__form__checkbox_label">他</label>
            </li>
        </ul>
        <!-- 検索ボタン -->
        <div class="search_button">
            <button type="submit" class="btn_kensaku">検　　索</button>
        </div> 
        <!-- /検索条件ボタン -->
    </section>
    <!-- /カテゴリー -->
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
                        {{$detail->rating >= 1 ? '★' : '☆' }}
                    </span>
                    <span>
                        {{$detail->rating  >= 2 ? '★' : '☆' }}
                    </span>
                    <span>
                        {{$detail->rating  >= 3 ? '★' : '☆' }}
                    </span>
                    <span>
                        {{$detail->rating  >= 4 ? '★' : '☆' }}
                    </span>
                    <span>
                        {{$detail->rating  >= 5 ? '★' : '☆' }}
                    </span>
                </span>
                <span class="value font">{{$detail->rating}}</span>
                </div>
                <div class="button">
                <button><a href="{{route('stores.show', $detail->id)}}">詳細</a></button>
                </div>
            </div> 
            <div class="usercoment font">
                <div class="userinfo">
                    @if($detail->bestreview()['user'])
                    <p>{{ $detail->bestreview()['user']['name'] }}さんの口コミ</p>
                    @else
                    <p>退会されたユーザーの口コミ</p>
                    @endif
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