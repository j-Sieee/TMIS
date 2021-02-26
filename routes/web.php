<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', function () {
// return view('home');

})->middleware('auth');

Route::post('/apply', 'ApplyController@store');
Route::get('/', 'TransformerTypeController@index');

Route::get('/view', function(){

return view('/view_application');

});
Route::get('/view', 'ViewApplicationController@index');



// Auth::routes();
// Route::get('/', function () {
// return view('auth/login');

// });


// Route::post('/apply', 'ApplyController@store');
// Route::get('/', 'TransformerTypeController@index');
// // Route::get('/', 'ApplyController@index');

// Route::get('/view', function(){

// return view('/view_application');

// });
// Route::get('/view', 'ViewApplicationController@index');

