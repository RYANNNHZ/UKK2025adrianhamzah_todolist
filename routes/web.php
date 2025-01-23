<?php

use App\Livewire\ListCreate;
use App\Livewire\Lists;
use App\Livewire\Tasks;
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

// Route::resource('/list',ListController::class);
Route::get('/', Lists::class);
Route::get('/tasks', Tasks::class);
Route::get('/listcreate',ListCreate::class);

