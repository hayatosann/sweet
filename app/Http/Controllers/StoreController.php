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

        foreach($stores as $store) {
            $ratings = $store->review_ratings();

            if(count($ratings) < 1) continue;
            
            $sum = 0;
            foreach ($ratings as  $id=>$value) {
                $sum+=$value;
            }

            if($sum == 0){
                $store -> rating = 0;
            }else{
                $store -> rating = round($sum / count($ratings), 1);
            }

        }
                return view('index',['stores'=>$stores]);


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
        $ratings = $store->review_ratings();

        $sum = 0;
        foreach ($ratings as  $id=>$value) {
            $sum+=$value;
        }

        if($sum == 0){
            $store -> rating = 0;
        }else{
            $store -> rating = round($sum / count($ratings), 1);
        }

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
        $stores = Store::where('name', 'like', "%$word%") -> orwhere('address', 'like', "%$word%") ->get();
        return view('index', ['stores'=>$stores]);
    }



}
