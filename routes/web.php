<?php

//  ADMIN
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'a'], function() {
    Route::get('/', 'AdminController@index')->name('admin.panel');

    //  ARTICLES
    Route::get('articles', 'ArticleController@index')->name('articles');
    Route::get('article/create', 'ArticleController@create')->name('article.create');
    Route::post('article/{id}', 'ArticleController@save')->name('article.save');
    Route::get('article/{id}/edit', 'ArticleController@edit')->name('article.edit');

    //  TAGS
    Route::get('tags', 'TagController@index')->name('tags');
    Route::get('tag/create', 'TagController@create')->name('tag.create');
    Route::post('tag', 'TagController@store')->name('tag.store');
    Route::get('tag/{id}/edit', 'TagController@edit')->name('tag.edit');
    Route::put('tag/update/{id}', 'TagController@update')->name('tag.update');

    //  USERS
    Route::get('user', 'UserController@index')->name('users');
});

//  GUEST
Route::get('articles', 'BlogController@articles')->name('blog.articles');
Route::get('tags', 'BlogController@tags')->name('blog.tags');
Route::get('about', 'BlogController@about')->name('blog.about');

//  LOGIN
Route::get('login', 'LoginController@index')->name('login');
Route::post('login', 'LoginController@auth')->name('login.auth');

Route::get('/', function() {
    return redirect('articles');
});