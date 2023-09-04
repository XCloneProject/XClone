<?php

namespace App\Http\Controllers;

use App\Models\Fichiers;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\StorePostFileRequest;

class FileController extends Controller
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
    public function store(StorePostFileRequest $request,StorePostRequest $req)
    {
        $image = new Fichiers();
        $image->fichier = $request->file('fichier')->store('images', 'public');
        $image->post_id = 1;
        $image->save();   
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
    public function update(UpdateFileRequest $request, $post_id)
    {
        $filepost = Fichiers::where('post_id',$post_id)->get();
        $filepost->fichier = $request->input('fichier');
        $filepost->save();
        return response()->json([
            'status' => 200,
            'message' => 'Fichier Updated Succesfully'
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
        //
    }

    public function afficherParPost($post_id){
        $images = Fichiers::where('post_id',$post_id)->get();
        if($images->count()>0)
            return $images;
            else
                return null;
    }

    public function UploadImage() {
        $image = new Fichiers();
        $image->fichier = $request->file('fichier')->store('images', 'public');
        $image->post_id = 1;
        $image->save();
    }
    
}
