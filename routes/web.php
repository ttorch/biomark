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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/admin/dashboard', 'HomeController@index')->name('dashboard');

Route::get('admin/dashboard',[
    'as'   =>'admin.dashboard',
    'uses' =>'HomeController@index'
]);

Route::get('admin/clients',[
    'as'   =>'admin.clients',
    'uses' =>'ClientsController@index'
]);

Route::get('admin/tests',[
    'as'   =>'admin.tests',
    'uses' =>'TestsController@index'
]);

Route::get('admin/resources',[
    'as'   =>'admin.resources',
    'uses' =>'ResourcesController@index'
]);

Route::get('admin/profile',[
    'as'   =>'admin.profile',
    'uses' =>'ProfileController@index'
]);

Route::post('admin/profile/store',[
    'as'   =>'admin.profile.store',
    'uses' =>'ProfileController@store'
]);

Route::put('admin/profile/patch/{id}',[
    'as'   =>'admin.profile.patch',
    'uses' =>'ProfileController@update'
]);

Route::get('admin/settings',[
    'as'   =>'admin.settings',
    'uses' =>'SettingsController@index'
]);