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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/profile', function () {
    return view('/profile/1');
});
Auth::routes();

Route::post('follow/{user}','follwController@store');

Route::get('/p/create', 'postsController@create');
Route::post('/p', 'postsController@store');
Route::get('/p/{posts}', 'postsController@show');


Route::get('/c/create', 'eventsController@create');
Route::post('/c', 'eventsController@store');
Route::get('/c/{events}', 'eventsController@show');
Route::get('/c/{events}/edit', 'eventsController@edit')->name('events.edit');
Route::PATCH('/c/{events}', 'eventsController@update')->name('events.update');

Route::get('/profile/{user}/edit', 'profileController@edit')->name('profile.edit');
Route::PATCH('/profile/{user}', 'profileController@update')->name('profile.update');
Route::get('/profile/{user}', 'profileController@index')->name('profile.show');
Route::get('/x', function () {

    $user=Auth::user();

    $user->notify(new NewFollower(User::findOrfail(1)));

} );
