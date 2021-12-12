<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class,'master'])->name('master');

Route::get('/index', [PageController::class,'index'])->name('gm.index');

Route::get('/contact', [PageController::class,'contact'])->name('gm.contact');
