<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index');
Route::get('search', 'PagesController@search');
Route::get('results', 'PagesController@results');
Route::get('details', 'PagesController@details');
Route::get('contact', 'PagesController@contact');
Route::get('pages.thankyou', 'PagesController@thankyou');


Route::get('profile', 'PagesController@profile');
Route::get('settings', 'PagesController@settings');

Route::get('admin', 'AdminController@index');
Route::get('agents', ['uses' => 'AgentController@index']);
Route::get('agents/create', ['uses' => 'AgentController@create']);
Route::post('agents', ['uses' => 'AgentController@store']);
Route::get('listings', ['uses' => 'ListingsController@index']);
Route::get('listings/create', ['uses' => 'ListingsController@create']);
Route::get('leads', 'AdminController@leads');



Route::get('users', ['uses' => 'UsersController@index']); 
Route::get('users/create', ['uses' => 'UsersController@create']);
Route::post('users', ['uses' => 'UsersController@store']);
Auth::routes();

Route::get('/home', 'HomeController@index');

