<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/





//$error変数を使うためRoute::groupの外側に設置
Route::auth();



Route::group(['middleware' => ['web']], function(){

Route::get('/pass/reset/menu','Password@show');
Route::get('/pass/done','Password@update');
Route::get('/users/{id}', 'UsersController@show');
Route::get('/','StoriesController@index');
Route::get('/stories/{id}/show','StoriesController@show');
Route::get('/stories/{id}/read','StoriesController@read');
Route::get('/stories/{id}/episode/create', 'EpisodesController@create');
Route::patch('/stories/{id}/introductionEdit', 'StoriesController@introductionEdit');
Route::get('/stories/create', 'StoriesController@create');
Route::post('/stories/store','StoriesController@store');
Route::get('/episodes/{id}/delete', 'EpisodesController@delete');
Route::get('/episodes/show/{id}','EpisodesController@show');
Route::get('/stories/{id}/delete', 'StoriesController@delete');
Route::patch('/users/edit/name','UsersController@editName');
Route::patch('/user/update/image','UsersController@updateimage');
Route::patch('/stories/update/image','StoriesController@updateimage');
Route::patch('/users/edit/email','UsersController@editEmail');
Route::get('/episodes/{id}/edit', 'EpisodesController@edit');
Route::patch('/episodes/{id}', 'EpisodesController@update');
Route::post('/stories/{id}/episode/store', 'EpisodesController@store');
Route::get('/show/alluser','UsersController@showall');


});





