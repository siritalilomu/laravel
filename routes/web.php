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

/*
use App\Task;
no longer need the above code if I'm using a Controller
*/

// Route::get('/', function () {
//     return view('welcome', [
//       'name' => 'Siri'
//     ]);
// });

Route::get('/', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');


// Route::get('/tasks', function () {
//   // using MySQL
//   // $tasks = DB::table('tasks')->latest()->get();
//   // using Eloquent
//   // $tasks = App\Task::all();
//   // using namespace
//   $tasks = Task::all();
//   // return $tasks;
//   return view('tasks.index', compact('tasks'));
// });

// same as above but now I'm using a Controller
// Route::get('/tasks', 'TasksController@index');

// same as below bui now I'm using a Controller
// Route::get('/tasks/{task}', 'TasksController@show');

// Route::get('/tasks/{task}', function ($id) {
//   // using MySQL
//   // $task = DB::table('tasks')->find($id);
//   // using Eloquent
//   // $task = App\Task::find($id);
//   // using namespace
//   $task = Task::find($id);
//
//   return view('tasks.show', compact('task'));
//
// });

// Route::get('/tasks/{task}', function ($id) {
//   $task = Task::find($id);
//   return view('tasks.show', compact('task'));
//
// });
