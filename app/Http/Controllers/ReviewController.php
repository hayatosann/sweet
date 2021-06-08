<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        $review -> id;
        $review -> store_id = $request -> store_id;
        $review -> comment = $request -> comment;
        $review -> created_at = $request -> created_at;
        $review -> user_id = Auth::id();
        $review -> review = $request -> review;
        $review -> charge = $request -> charge;
        $review -> ate_thing = $request -> ate_thing;
        $review -> category_id = $request -> category_id;
        $review -> post_image = $request -> post_image;
        $review -> published_at = $request -> published_at;
        $review -> updated_at = $request -> updated_at;

        $review -> save();
        
        $review = Review::All($id);

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
        //
    }




}
