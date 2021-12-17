<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyConroller;
use App\Models\Survey;
use App\Models\Post;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/surveys",[SurveyConroller::class,'index']);
Route::post("/surveys",[SurveyConroller::class,'store']);
Route::put("/surveys/{id}",[SurveyConroller::class,'update']);
Route::delete("/surveys/{id}",[SurveyConroller::class,'destroy']);

Route::get('/posts',function(){
    return Post::all();
});

Route::post('/posts',function(){
    request()->validate([
        'title'=>'required',
        'content'=>'required'
    ]);
    return Post::create([
        'title'=>request('title'),
        'content'=>request('content')
    ]);
});

Route::put('/posts/{post}',function(Post $post){
    $post->update([
        'title'=>request('title'),
        'content'=>request('content')
    ]);
});

Route::delete('/posts/{post}',function(Post $post){
   $success = $post->delete();

   return [
       'success' =>$success
   ];
});