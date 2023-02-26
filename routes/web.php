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

Route::get('/', function () { return view('welcome');})->name('home');


require __DIR__.'/auth.php';
