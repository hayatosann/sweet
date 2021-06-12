<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;


use App\Store;
use Auth;
use App\Review;
use App\Store;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $store = Store::find($id);
        
        $store -> store_id = $request -> store_id;
        $store -> name = $request -> name;
        $store -> category_id = $request -> category_id;
        $store -> address = $request -> address;
        $store -> opening_hour = $request -> opening_hour;
        $store -> closing_day = $request -> closing_day;
        $store -> phone_number = $request -> phone_number;
        $store -> url = $request -> url;
        $store -> price = $request -> price;
        $store -> category_id = $request -> category_id;
        $store -> prefecture_id = $request -> prefecture_id;
        $store -> store_image = $request -> store_image;
        $store -> latitude = $request -> latitude;
        $store -> longitude = $request -> longitude;
        $store -> save();

        return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $review = new Review;

        $review -> store_id = $request -> store_id;
        $review -> comment = $request -> comment;
        $review -> created_at = $request -> created_at;
        $review -> user_id = Auth::id();
        $review -> review = $request -> review;
        $review -> charge = $request -> charge;
        $review -> ate_thing = $request -> ate_thing;
        $review -> category_id = $request -> category_id;
        $review -> post_image = $request -> post_image;
        
        if($request->is_published){
            $review -> published_at = now();
        }

        $review -> save();

        return redirect()->route('stores.show');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $review = Review::find($id);
    
        return view('stores.show', ['review'=>$review]);



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
        $review = Review::find($id);
        if(Auth::id()!== $review->user_id){
            return abort(404);
        }
        $review -> delete();
        return redirect()->route('reviews.myreview');
    }

    public function myreview()
    {
        // ログインユーザーの投稿
        $reviews = Auth::user()->reviews;
        $userdata = Auth::user();

        return view('users.mypage', ['sendreview' => $reviews, 'senduserdata' => $userdata]);
    }
}
