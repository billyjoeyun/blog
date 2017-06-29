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



Route::get('/about', function () {
    return view('about');
});


Route::get('/hello', function () {
    $name = 'Billy2';
    $age = '27';

    return view('hello', compact('name','age'));

});

//TASKS
//all task
Route::get('/tasks', function () {
    $tasks = DB::table('tasks')->latest()->get();

    //return $tasks; //JSON return good for API

    return view('tasks.index', compact('tasks'));

});

//specific task
Route::get('/tasks/{task}', function ($id) {
    $tasks = DB::table('tasks')->find($id);

    //dd($tasks);
    //return $tasks; //JSON return good for API

    return view('tasks.show', compact('tasks'));

});

