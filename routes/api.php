<?php

use App\User;
use Illuminate\Http\Request;

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

Route::name('api.login')->post('login', 'Api\AuthController@login');

Route::post('refresh', 'Api\AuthController@refresh');
//o middleware jwt.refresh renova o token a cada requisição utilizando o token anterior
Route::group(['middleware' => ['auth:api', 'jwt.refresh']], function (){
    Route::get('users', function (){
        return User::all();
    });

    Route::post("logout", 'Api\AuthController@logout');

    //exemple route without create and edit, because both is to show a form
    //Route::resource('clientes', 'ClientController', ['except' => ['create', 'edit']]);

});
