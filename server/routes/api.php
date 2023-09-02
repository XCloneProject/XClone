<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Auth;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



//public routes
Route::post('login',[AuthController::class,'login']);
Route::post('register',[AuthController::class,'register']);

//protected routes
Route::group(['middleware'=>['auth:sanctum']],function(){
    
    Route::post('/logout',[AuthController::class,'logout']);
    Route::Resource('/tasks',TasksController::class);
});

Route::group(['middleware'=>['auth:sanctum','verified']],function(){

    Route::apiResource('Post',PostController::class);
    Route::apiResource('Files',FileController::class);
    Route::get('/AllPosts',[PostController::class,'index']);
    Route::post('/CreatePost',[PostController::class,'store']);
    Route::put('/ModifyPost/{id}',[PostController::class,'update']);
    Route::delete('/SupPost/{id}',[Postcontroller::class,'destroy']);
    Route::get('/ShowMyProfile',[PostController::class,'listPostProfile']);
    Route::get('/ShowMyProfileGenre',[PostController::class,'listByGenre']);
    Route::get('/postFile/{post_id}',[FileController::class,'afficherParPost']);
    Route::post('/AjoutComment/{post_id}',[CommentController::class,'ajouterCommentaire']);
    Route::get('/ListComment/{post_id}',[CommentController::class,'listCommentByPost']);
    Route::post('/like',[LikeController::class,'likePost']);
    Route::get('/viewLikes',[LikeController::class,'countLikes']);

});

