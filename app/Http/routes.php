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

/*
|--------------------------------------------------------------------------
| Home Routes
|--------------------------------------------------------------------------
*/
Route::get('/', 'HomeController@index');

Route::get('Home', 'HomeController@index');

/*
|--------------------------------------------------------------------------
| Get started Routes
|--------------------------------------------------------------------------
*/
Route::get('Get-Started', 'RequestsController@index');

Route::post('Get-Started', 'RequestsController@store');

/*
|--------------------------------------------------------------------------
| Book your cleaner Routes
|--------------------------------------------------------------------------
*/
Route::get('Book-Your-Cleaner', 'BookCleanerController@index');

Route::post('Book-Your-Cleaner', 'BookCleanerController@store');

/*
|--------------------------------------------------------------------------
| FAQs Route
|--------------------------------------------------------------------------
*/
Route::get('FAQs', 'FAQsController@index');

/*
|--------------------------------------------------------------------------
| Cleaning tips Routes
|--------------------------------------------------------------------------
*/
Route::get('Cleaning-Tips', 'TipsController@index');

/*
|--------------------------------------------------------------------------
| Downloads Routes
|--------------------------------------------------------------------------
*/
Route::get('Downloads/{filename}', 'DownloadsController@index');

/*
|--------------------------------------------------------------------------
| Request quote Routes
|--------------------------------------------------------------------------
*/
Route::get('{service}', 'QuotesController@index');

Route::post('Request-Quote', 'QuotesController@store');

/*
|--------------------------------------------------------------------------
| Quick link Route
|--------------------------------------------------------------------------
*/
Route::get('link/{service}', 'QuickViewController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
