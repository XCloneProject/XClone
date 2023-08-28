<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TasksController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




//public routes
Route::post('/login',[AuthController::class,'login']);
Route::post('/register',[AuthController::class,'register']);

//protected routes
Route::group(['middleware'=>['auth:sanctum']],function(){
    
    Route::post('/logout',[AuthController::class,'logout']);
    Route::Resource('/tasks',TasksController::class);
});

Route::group(['middleware'=>['auth:sanctum']],function(){
    
    Route::apiResource('Post',PostController::class);
    Route::get('/AllPosts',[PostController::class,'index']);
    Route::post('/CreatePost',[PostController::class,'store']);
    Route::put('/ModifyPost/{id}',[PostController::class,'update']);
    Route::delete('/SupPost/{id}',[Postcontroller::class,'destroy']);
    Route::get('/ShowMyProfile',[PostController::class,'listPostProfile']);
    Route::get('/ShowMyProfile',[PostController::class,'listByGenre']);
});
