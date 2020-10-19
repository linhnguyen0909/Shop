<?php

use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('article','ArticleController@store');
Route::get('article/{article}','ArticleController@show');
Route::get('article/{article}/comments','ArticleController@show_comments');
Route::get('article/{article}/best-comment','ArticleController@show_best_comment');
Route::get('articles','ArticleController@index');
Route::delete('article/{article}','ArticleController@destroy');

Route::post('article/{article}/comment','CommentController@store');
Route::post('comment/{comment}/best-comment','CommentController@best_comment');
Route::get('comments','CommentController@index');
Route::get('comment/{comment}', 'CommentController@show');
Route::delete('comment/{comment}','CommentController@destroy');

//Route::get('/users', function() {
//    return UserResource::collection(User::all());
//});
//Route::get('/users', function() {
//    return new UserCollection(User::all());
//});
Route::get('/users/{users}', function(User $users) {
    return (new UserResource(User::find('06306c08-3191-3567-b3c0-3ddc0825f65b')))->additional([
        'meta' => [
            'anything' => 'Some Value'
        ]
    ]);
});
