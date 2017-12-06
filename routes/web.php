<?php

Auth::routes();

Route::get('/', 'PostController@index')->name('posts.index');
Route::get('/posts/recent', 'PostController@recentlyViewedPosts')
							->name('posts.recent')
							->middleware('auth');
Route::get('/posts/{post}', 'PostController@show')->name('posts.show');


