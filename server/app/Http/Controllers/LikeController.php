<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Like;
use Illuminate\Http\Request;
use App\Http\Requests\LikeRequest;

class LikeController extends Controller
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
        //
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
        $like = Like::where('post_id', $id)->where('user_id', auth()->id())->first();

        if($like){
        $like->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Unliked'
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'Like Not Found'
            ]);
        }
    }

    public function likePost(LikeRequest $request){
        $like = new Like();
        $like->user_id = auth::id();
        $like->post_id = $request->post_id;
        $like->save();
        return response()->json([
            'status' => 200,
            'message' => 'Post aime avec succes'
        ]);
    }

    public function countLikes($post_id){
        $like = Like::where('post_id',$post_id);
        return $like->count();
    }
}
