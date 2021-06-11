<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Store;
use Auth;

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
        $review = new Review;
        $review -> id = $request -> id;
        $review -> store_id = $request -> store;
        $review -> comment = $request -> comment;
        $review -> ate_thing = $request -> ate_thing;
        $review -> charge = $request -> charge;
        $review -> category_id = $request -> category_id;
        $review -> review = $request -> review;
        $review -> post_image = $request -> post_image;
        $review -> user_id = Auth::id();

        $image = $request->file('post_image');
        // file()で受け取る
        if($request->file('post_image')->isValid()){
            $image_name = $image->getClientOriginalName();
            $review -> post_image = $image->storeAs('public/images', $image_name);
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
        //
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

    public function myreview()
    {
        // ログインユーザーの投稿
        $reviews = Auth::user()->reviews;
        $userdata = Auth::user();

        return view('users.mypage', ['sendreview' => $reviews, 'senduserdata' => $userdata]);
    }
    
}
