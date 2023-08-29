<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\PostsResource;
use App\Http\Requests\StorePostRequest;
use App\Http\Controllers\FileController;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Requests\StorePostFileRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        if($posts->count()>0){
        return response()->json([
            'status' => 200,
            'data' => $posts
        ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'Something went wrong',
            ]);
        }
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
    public function store(StorePostRequest $request,StorePostFileRequest $req)
    {
        $post = new Post();
        $post->content = $request->input('content');
        $post->genre = $request->input('genre');
        $post->user_id = auth::user()->id;
        $fileController = new FileController();
        $fileController->store($req, $request);
        if($post){
            $post->save();
        return response()->json([
            'status' => 200,
            'message' => 'Post created successfully',
        ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'Something went wrong',
            ]);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = new PostsResource(Post::findOrFail($id));

            // Return a success response with the transformed data
            if($data){
                return $this->succes($data, 'DISPLAY');
            }
            return $this->error('', 'Post not found ', 403);
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
    public function update(UpdatePostRequest $request, $id)
    {
        $post = Post::findOrFail($id);

        $post->content = $request->input('content');
        $post->genre = $request->input('genre');
        $post->user_id = auth::user()->id;
        $post->save();
        return response()->json([
            'status' => 200,
            'data' => $post,
            'message' => 'Updated succesfuly'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        
        $post->delete();
        
        return $this->succes('', 'SUCCESSFULLY DELETED');
    }

    public function listPostProfile() {
        if($posts=Post::where('user_id',Auth::id())->get()){
            return response()->json([
                'status' => 200,
                'data' => $posts,
            ]);
        }
        return response()->json([
            'status' => 404,
            'message' => 'Post not found',
        ]);
    }

    public function listByGenre(Request $request) {
        $genre = $request->input('genre');
    
        $posts = Post::where('genre', $genre)->get();
    
        if ($posts->isEmpty()) {
            return response()->json([
                'status' => 404,
                'message' => 'Post not found',
            ]);
        }
    
        return response()->json([
            'status' => 200,
            'data' => $posts
        ]);
    }
    
}
