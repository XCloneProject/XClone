<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Fichiers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Resources\PostsResource;
use App\Http\Requests\StorePostRequest;
use App\Http\Controllers\FileController;
use App\Http\Requests\UpdateFileRequest;
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
    $data = DB::table('posts')
    ->leftJoin('fichiers','posts.id','=','fichiers.post_id')
    ->get();

    if($data){
        return response()->json([
            'status' => 200,
            'data' => $data
        ]);
    }else{
        return response()->json([
            'status' => 404,
            'message' => 'No data found'
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
        
    // Create a new post
    $post = new Post();
    $post->content = $request->content;
    $post->genre = $request->genre;
    $post->user_id = auth()->id();
    $post->save();

    if ($req->hasFile('fichier')) {
        // Get the uploaded file
        $file = $req->file('fichier');

        // Create a new Fichier model instance and set its attributes
        $fichier = new Fichiers();
        $fichier->fichier = $file->store('images', 'public'); // Store the file and get the path
        $fichier->post_id = $post->id;

        // Associate the file with the post
        $fichier->save();
    }

    return response()->json([
        'status' => 200,
        'message' => 'Post Created Successfully'
    ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = DB::table('posts')
                ->select('posts.*')
                ->where('posts.id',$id)
                ->get();
        $files = DB::table('fichiers')
                ->select('fichiers.*')
                ->where('fichiers.post_id',$id)
                ->get();
                
    if($post){
        return response()->json([
            'status' => 200,
            'data' => $post,
            'fichier' => $files
        ]);
    }else{
        return response()->json([
            'status' => 200,
            'message' => 'No Posts Found yet'
        ]);
    }
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
    public function update(UpdatePostRequest $request, $id , UpdateFileRequest $req)
    {
        if($post = Post::findOrFail($id)){
            /*if(!Gate::allows('UpdatePost',$post)){
                return response()->json([
                    'status' => 404,
                    'message' => 'Vous ne pouvez pas modifier ce post'
                ]);
            }*/
            $post->content = $request->input('content');
            $post->genre = $request->input('genre');
            $post->save();

            if ($req->hasFile('fichier')) {
                $fichier = new FileController();
                $fichier->update($req);
            }

            return response()->json([
                'status' => 200,
                'data' => $post,
                'message' => 'Updated succesfuly'
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'Post Not Found'
            ]);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        if(!Gate::allows('UpdatePost',$post)){
            return response()->json([
                'status' => 404,
                'message' => 'Vous ne pouvez pas supprimer ce post'
            ]);
        }
        $post->delete();
        
        return response()->json([
            'status' => 200,
            'message' => 'Deleted succesfuly'
        ]);
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
