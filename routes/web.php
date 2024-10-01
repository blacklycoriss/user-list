<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
Route::get('/',
    [PageController::class, 'indexPage']);
Route::get('/users',
    [PageController::class, 'allUsers']);
Route::get('/users/create', function() {
    return view('create', ['title' => 'Новый пользователь']);
});
Route::post('/users/create',
    [UserController::class, 'create'])->name('users.create');
Route::get('/users/{id}',
    [UserController::class, 'show'])->name('users.show');
Route::get('/users/{id}/edit', function() {
    return view('edit', []);
});
Route::post('/users/{id}/edit',
    [UserController::class, 'edit'])->name('users.edit');
Route::get('/users/{id}/delete',
    [UserController::class, 'delete'])->name('users.delete');
Route::get('/users/{id}/restore',
    [UserController::class, 'restore'])->name('users.restore');

use App\Http\Controllers\UserPageController;
Route::get('/users/{id}/profile',
    [UserPageController::class, 'info'])->name('profile.info');
