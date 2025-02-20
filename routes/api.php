<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




Route::middleware('auth:sanctum')->group(function () {
    // This route will be accessible only by authenticated users via Sanctum
    Route::get('/user', function (Request $request) {
        return $request->user();
    });


    Route::apiResource('users', \App\Http\Controllers\Api\UserController::class);

    //Route::apiResource('posts', \App\Http\Controllers\Api\PostController::class);


    // API routes for tasks-tatuses
    Route::apiResource('tasks-tatuses', \App\Http\Controllers\Api\TaskstatusController::class);
    // API routes for tasks
    Route::apiResource('tasks', \App\Http\Controllers\Api\TaskController::class);
    // API routes for todo-lists
    Route::apiResource('todo-lists', \App\Http\Controllers\Api\TodoListController::class);

});



// API routes for posts
//Route::get('posts', [\App\Http\Controllers\Api\PostController::class, 'index'])->name('posts.index');
//Route::get('posts/{post}', [\App\Http\Controllers\Api\PostController::class, 'show'])->name('posts.show');


//// API routes for users
//Route::get('users', [\App\Http\Controllers\Api\UserController::class, 'index'])->name('users.index');
//Route::get('users/{user}', [\App\Http\Controllers\Api\UserController::class, 'show'])->name('users.show');



//// API routes for tasks-tatuses
//Route::get('tasks-tatuses', [\App\Http\Controllers\Api\TaskstatusController::class, 'index'])->name('tasks-tatuses.index');
//Route::get('tasks-tatuses/{tasks-tatus}', [\App\Http\Controllers\Api\TaskstatusController::class, 'show'])->name('tasks-tatuses.show');
//// API routes for tasks
//Route::get('tasks', [\App\Http\Controllers\Api\TaskController::class, 'index'])->name('tasks.index');
//Route::get('tasks/{task}', [\App\Http\Controllers\Api\TaskController::class, 'show'])->name('tasks.show');
//// API routes for todo-lists
//Route::get('todo-lists', [\App\Http\Controllers\Api\TodoListController::class, 'index'])->name('todo-lists.index');
//Route::get('todo-lists/{todo-list}', [\App\Http\Controllers\Api\TaskController::class, 'show'])->name('todo-lists.show');
