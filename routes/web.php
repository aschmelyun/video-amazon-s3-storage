<?php

Route::get('/', 'ImageController@create');
Route::post('/', 'ImageController@store');
Route::get('/{image}', 'ImageController@show');
