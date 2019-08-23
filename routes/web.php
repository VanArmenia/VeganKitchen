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


Auth::routes(['verify'=> true]);

Route::get('/', 'HomeController@index')->name('home');
//Route::get('/admin', 'HomeController@admin')->name('admin');
Route::get('/menu', 'HomeController@menu')->name('home');
Route::get('/categories', 'CategoryController@index');
Route::get('/menu-editor/{any?}', 'AdminController@menu')
    ->middleware('can:edit-menu')
    ->where('any', '.*');



Route::group(['middleware' => ['can:edit-menu']], function () {

    Route::get('/clients', 'ClientController@index')->name('clients');
    Route::get('/clients/new', 'ClientController@newClient')->name('new_client');
    Route::post('/clients/new', 'ClientController@newClient')->name('create_client');
    Route::get('/clients/{client_id}', 'ClientController@show')->name('show_client');
    Route::post('/clients/{client_id}', 'ClientController@modify')->name('update_client');


    Route::get('/reservations/{client_id}', 'RoomsController@checkAvailableRooms')->name('check_room');
    Route::post('/reservations/{client_id}', 'RoomsController@checkAvailableRooms')->name('check_room');

    Route::get('/book/room/{client_id}/{room_id}/{date_in}/{date_out}', 'ReservationsController@bookRoom')->name('book_room');

});

//Route::get('/clients', 'ClientController@index')->name('clients');