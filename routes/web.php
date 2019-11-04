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

Route::get('/', function() {
    return redirect('articles');
});

Route::get('articles', 'BlogController@articles')->name('blog.articles');
Route::get('tags', 'BlogController@tags')->name('blog.tags');
Route::get('about', 'BlogController@about')->name('blog.about');

//Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'a'], function() {
Route::group(['middleware' => 'guest', 'prefix' => 'a'], function() {
    Route::get('/', 'AdminController@index');

    Route::get('article', 'ArticleController@index')->name('articles');

    Route::get('tags', 'TagController@index')->name('tags');
    Route::get('tag/create', 'TagController@create')->name('tag.create');
    Route::post('tag', 'TagController@store')->name('tag.store');
    Route::get('tag/{id}/edit', 'TagController@edit')->name('tag.edit');
    Route::put('tag/update/{id}', 'TagController@update')->name('tag.update');

    Route::resource('tag', 'TagController')
        ->only(['create', 'store', 'edit', 'update']);


    Route::get('user', 'UserController@index')->name('users');
});

Route::get('login', 'LoginController@index')->name('login');
