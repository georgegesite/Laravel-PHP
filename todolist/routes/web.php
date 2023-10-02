<?php

use App\Http\Controllers\TodolistController;
use Illuminate\Support\Facades\Route;

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

Route::get('/todolist', [TodolistController::class, 'index'])->name('todolist.index');
Route::get('/todolist/create', [TodolistController::class, 'create'])->name('todolist.create');
Route::post('/todolist', [TodolistController::class, 'store'])->name('todolist.store');
