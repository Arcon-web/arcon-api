<?php
 
use Illuminate\Http\Request;
use App\Game;

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

Route::middleware('auth:api')->get('games', 'GamesController@index');
Route::middleware('auth:api')->get('games/{game}', 'GamesController@show');
Route::middleware('auth:api')->post('games', 'GamesController@store');
Route::middleware('auth:api')->put('games/{game}', 'GamesController@update');
Route::middleware('auth:api')->delete('games/{game}', 'GamesController@delete');