<?php

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

use App\Http\Controllers\FileManager\DashboardController;
use App\Http\Controllers\FileManager\ServerController;


Route::get('/dashboard',[DashboardController::class,'dashboard'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/server-{server}',[ServerController::class,'dashboard'])->middleware(['auth'])->name('server-dashboard');
// Add Server 
Route::post('/dashboard/add-server',[ServerController::class,'addServer'])->middleware(['auth'])->name('add-server');
// Create 
Route::post('/dashboard/add-folder-server',[ServerController::class,'addFolder'])->middleware(['auth'])->name('new-folder-server');
Route::post('/dashboard/add-file-server',[ServerController::class,'addFile'])->middleware(['auth'])->name('new-file-server');

Route::get('/', function () { return view('welcome');})->name('home');


require __DIR__.'/auth.php';
