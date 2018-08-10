<?php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home', 'TasksController@index')->name('tasks.index');

Route::get('home/create', 'TasksController@create')->name('tasks.create');

Route::post('home/store', 'TasksController@store')->name('tasks.store');

Route::get('home/{id}/edit', 'TasksController@edit')->name('tasks.edit');

Route::get('home/{id}/update', 'TasksController@update')->name('tasks.update');

Route::get('home/{id}/show', 'TasksController@show')->name('tasks.show');

Route::delete('home/{id}/destroy', 'TasksController@destroy')->name('tasks.destroy');

