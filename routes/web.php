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
    return view('auth/login');
});

Auth::routes();

Route::get('/home',['as'=>'dashboard','uses'=>'HomeController@index']);
Route::get('/typography',['as'=>'typography','uses'=>'HomeController@typography']);
Route::get('/helper',['as'=>'helper','uses'=>'HomeController@helper']);
Route::get('/widget',['as'=>'widget','uses'=>'HomeController@widget']);
Route::get('/table',['as'=>'table','uses'=>'HomeController@table']);
Route::get('/media',['as'=>'media','uses'=>'HomeController@media']);
Route::get('/chart',['as'=>'chart','uses'=>'HomeController@chart']);
Route::get('/form',['as'=>'form','uses'=>'HomeController@form']);
Route::get('/events/index',['as'=>'events/index','uses'=>'EventsController@index']);
Route::get('/events/single',['as'=>'events/single','uses'=>'EventsController@single']);
Route::get('/contacts/index',['as'=>'contacts/index','uses'=>'ContactsController@index']);

Route::get('/guests/password',['as'=>'guests','uses'=>'GuestsController@index']);

Route::get('/setting/admins',['as'=>'setting/admins','uses'=>'SettingController@admins']);
Route::get('/setting/ungrouped',['as'=>'setting/ungrouped','uses'=>'SettingController@ungrouped']);

Route::group(['middleware' => ['role:admin']], function () {
	Route::resource('permissions', 'Admin\PermissionsController');     
    Route::resource('roles', 'Admin\RolesController');     
    Route::resource('users', 'Admin\UsersController'); 
    Route::resource('add-items', 'Admin\AddItemController');  
});

Route::resource('profile','Users\ProfileController');


