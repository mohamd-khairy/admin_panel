<?php

use Illuminate\Support\Facades\Route;

/******************** website******************* */
Route::get('/', 'HomePageController@index')->name('homepage.index');

/******************* admin ********************* */
Route::get('/login', 'Admin\LoginController@login')->name('login');
Route::post('/login', 'Admin\LoginController@do_login')->name('do_login');
Route::post('/logout', 'Admin\LoginController@do_logout')->name('logout');
Route::group(['prefix' => '/admin',  'as' => 'admin.', 'middleware' => 'auth', 'namespace' => 'Admin'], function () {

    Route::get('/', 'LoginController@home')->name('admin');
    Route::resource('setting', 'SettingController')->except('index', 'create', 'store');
    Route::resource('footer', 'FooterController')->except('index', 'create', 'store');
    Route::resource('social', 'SocialController');

    /** pages */
    Route::get('/pages', 'PagesController@index')->name('get_pages');
    Route::get('/pages/add', 'PagesController@create')->name('get_create_page');
    Route::post('/pages/create', 'PagesController@store')->name('add_page');
    Route::get('/pages/edit/{id}', 'PagesController@edit')->name('edit_page');
    Route::put('/pages/update', 'PagesController@update')->name('update_page');
    Route::delete('/pages/delete/{id}', 'PagesController@delete')->name('delete_page');

    /** users */
    Route::get('/user', 'UsersController@index')->name('get_users');
    Route::get('/user/add', 'UsersController@create')->name('get_create_user');
    Route::post('/user/create', 'UsersController@store')->name('add_user');
    Route::get('/user/edit/{id}', 'UsersController@edit')->name('edit_user');
    Route::put('/user/update', 'UsersController@update')->name('update_user');
    Route::delete('/user/delete/{id}', 'UsersController@delete')->name('delete_user');
});
