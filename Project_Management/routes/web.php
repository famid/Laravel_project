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

Route::namespace('Admin')->group(function () {

    Route::get('/admin', 'AdminController@index')->name('admin.home');
    Route::get('/admin/project', 'ProjectController@index')->name('admin.project.index');
    Route::get('/admin/project/create', 'ProjectController@create')->name('admin.project.create');
    Route::post('/admin/project', 'ProjectController@store')->name('admin.project.store');
    Route::get('/admin/project/{project}', 'ProjectController@show')->name('admin.project.show');
    Route::get('/admin/project/{project}/edit', 'ProjectController@edit')->name('admin.project.edit');
    Route::post('/admin/project/{project}', 'ProjectController@update')->name('admin.project.update');


    Route::get('/admin/project/{project}/task/create', 'TaskController@create')->name('admin.project.task.create');
    Route::post('/admin/project/task', 'TaskController@store')->name('admin.project.task.store');



});

Route::namespace('User')->group(function () {

    Route::get('/user', 'UserController@index')->name('user.home');
});




