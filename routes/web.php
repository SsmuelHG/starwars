<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\starController;


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


Route::get('/', [starController::class,'index'])->name('index');

Route::get('/generic', [starController::class,'generic'])->name('generic');

Route::get('/elements', [starController::class,'elements'])->name('elements');


