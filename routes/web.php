<?php

use App\Models\Task;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function () {
    $data = Task::all();
    return view('tasks') -> with('tasks', $data);
});


Route::post('/SaveTask', 'App\Http\Controllers\TaskController@store');

Route::get('/markascompleted/{id}', 'App\Http\Controllers\TaskController@UpdateTaskAsCompleted');

Route::get('/markasnotcompleted/{id}', 'App\Http\Controllers\TaskController@UpdateTaskAsNotCompleted');

Route::get("/deletetask/{id}", 'App\Http\Controllers\TaskController@DeleteTask');

Route::get("/updatetask/{id}", 'App\Http\Controllers\TaskController@UpdateTaskView');

Route::post("/updatetasks", 'App\Http\Controllers\TaskController@UpdateTask');




