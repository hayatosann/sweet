<?php

namespace App\Http\Controllers;

use App\Review;
use App\Store;
use Auth;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::all();

        // そのお店が持っている全部のレビューの評価数
        // 配列の中の数値の合計値 / 配列の合計数
        // 例：合計値が22 / 5件の評価  など
        
        $average = 4.2;
        return view('index',['stores'=>$stores],['average'=>$average]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //お店情報入力画面がないので不要。
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $store = Store::find($id);
        
        return view ('stores.show', ['store'=>$store]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    // フォームから飛んできた値で店の名前と住所の中を検索して店一覧(index)に返すメソッド
    public function search(Request $request)
    {
        $word = $request -> searchword;
        $results = Store::where('name', 'like', "%$word%") -> orwhere('address', 'like', "%$word%") ->get();
        return view('index', ['stores'=>$results]);
    }



}
