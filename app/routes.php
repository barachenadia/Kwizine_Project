<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//  Route::get('/', function()
//  {
// return View::make('hello');
// });
// Route::get('posts',"PostsController@index");
//  Route::get('posts/{id}/edit',"PostsController@edit");
// Route::get('posts/{id}', "PostsController@show");
// Route::resource('posts','PostsController');
Route::get('/', 'HomeController@index');
Route::resource('recettes', 'RecettesController');
Route::resource('comments', 'CommentsController');
Route::resource('categories', 'CategoriesController');
Route::resource('users', 'UsersController');