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




  Route::middleware('cors')->post('/register', 'Api\AuthController@register');
  Route::middleware('cors')->post('/login', 'Api\AuthController@login');



  Route::get('profile', 'ProfileController@getIndex');

Route::group(['middleware' => ['auth:api', 'cors']], function() {
    // uses 'auth' middleware plus all middleware from $middlewareGroups['web']
    Route::get('games', 'GamesController@index'); 
    Route::get('games/{game}', 'GamesController@show'); 
    Route::post('games', 'GamesController@store'); 
    Route::put('games/{game}', 'GamesController@update'); 
<<<<<<< HEAD
    Route::delete('games/{game}', 'GamesController@delete'); 
=======
    Route::delete('games/{game}', 'GamesController@delete');
    Route::post('friends/add', 'FriendsController@addFriends'); 

>>>>>>> fe55ec085903115ed624ce94cf240e113990ec97
    Route::get('friends/{user_id}', 'FriendsController@showFriends'); 

   
  });